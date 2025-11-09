<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Tampilkan halaman list user (Method ini tetap sama)
     */
    public function index()
    {
        $users = User::where('id', '!=', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin.users.index', compact('users'));
    }

    /**
     * TIDAK DIPAKAI LAGI (diganti modal)
     * public function create() { ... }
     */

    /**
     * Simpan user baru (Respon JSON)
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'is_admin' => 'nullable|boolean',
        ]);

        // Jika validasi GAGAL, kembalikan error sbg JSON
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => $request->has('is_admin') ? 1 : 0,
        ]);

        // Jika SUKSES, kembalikan pesan sukses sbg JSON
        return response()->json(['success' => 'User berhasil ditambahkan.']);
    }

    /**
     * Ambil data user untuk form edit (Respon JSON)
     */
    public function edit(User $user)
    {
        // Keamanan: Tolak edit jika user-nya adalah ID 1
        if ($user->id == 1) {
            return response()->json(['error' => 'User developer tidak bisa diedit.'], 403); // 403 = Forbidden
        }

        // Jika SUKSES, kembalikan data user sbg JSON
        return response()->json($user);
    }

    /**
     * Update data user (Respon JSON)
     */
    public function update(Request $request, User $user)
    {
        // Keamanan: Tolak update jika user-nya adalah ID 1
        if ($user->id == 1) {
            return response()->json(['error' => 'User developer tidak bisa diupdate.'], 403);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'username' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($user->id)],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'password' => 'nullable|string|min:8|confirmed',
            'is_admin' => 'nullable|boolean',
        ]);

        // Jika validasi GAGAL, kembalikan error sbg JSON
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $data = [
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'is_admin' => $request->has('is_admin') ? 1 : 0,
        ];

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        // Jika SUKSES, kembalikan pesan sukses sbg JSON
        return response()->json(['success' => 'User berhasil diupdate.']);
    }

    /**
     * Hapus user (Method ini tetap sama, redirect)
     */
    public function destroy(User $user)
    {
        if ($user->id == 1) {
            // Kirim respon error JSON
            return response()->json(['error' => 'User developer tidak bisa dihapus.'], 403);
        }

        $user->delete();

        // Kirim respon sukses JSON
        return response()->json(['success' => 'User berhasil dihapus.']);
    }
}
