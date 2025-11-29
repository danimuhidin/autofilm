<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Outlet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class OutletController extends Controller
{
    /**
     * Tampilkan halaman list outlet
     */
    public function index()
    {
        $outlets = Outlet::orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin.outlets.index', compact('outlets'));
    }

    /**
     * Simpan outlet baru (Respon JSON)
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'telp' => 'required|string|max:20',
            'link1' => 'nullable|string|max:500',
            'link2' => 'nullable|string|max:500',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'operation_hours' => 'nullable|string|max:255',
        ]);

        // Jika validasi GAGAL, kembalikan error sbg JSON
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $data = [
            'name' => $request->name,
            'address' => $request->address,
            'telp' => $request->telp,
            'link1' => $request->link1,
            'link2' => $request->link2,
            'operation_hours' => $request->operation_hours,
        ];

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('outlets', 'public');
            $data['image'] = $imagePath;
        }

        Outlet::create($data);

        // Jika SUKSES, kembalikan pesan sukses sbg JSON
        return response()->json(['success' => 'Outlet berhasil ditambahkan.']);
    }

    /**
     * Ambil data outlet untuk form edit (Respon JSON)
     */
    public function edit(Outlet $outlet)
    {
        // Jika SUKSES, kembalikan data outlet sbg JSON
        return response()->json($outlet);
    }

    /**
     * Update data outlet (Respon JSON)
     */
    public function update(Request $request, Outlet $outlet)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'telp' => 'required|string|max:20',
            'link1' => 'nullable|string|max:500',
            'link2' => 'nullable|string|max:500',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'operation_hours' => 'nullable|string|max:255',
        ]);

        // Jika validasi GAGAL, kembalikan error sbg JSON
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $data = [
            'name' => $request->name,
            'address' => $request->address,
            'telp' => $request->telp,
            'link1' => $request->link1,
            'link2' => $request->link2,
            'operation_hours' => $request->operation_hours,
        ];

        // Handle image upload
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($outlet->image && Storage::disk('public')->exists($outlet->image)) {
                Storage::disk('public')->delete($outlet->image);
            }
            $imagePath = $request->file('image')->store('outlets', 'public');
            $data['image'] = $imagePath;
        }

        $outlet->update($data);

        // Jika SUKSES, kembalikan pesan sukses sbg JSON
        return response()->json(['success' => 'Outlet berhasil diupdate.']);
    }

    /**
     * Hapus outlet
     */
    public function destroy(Outlet $outlet)
    {
        // Hapus gambar jika ada
        if ($outlet->image && Storage::disk('public')->exists($outlet->image)) {
            Storage::disk('public')->delete($outlet->image);
        }

        $outlet->delete();

        // Kirim respon sukses JSON
        return response()->json(['success' => 'Outlet berhasil dihapus.']);
    }
}
