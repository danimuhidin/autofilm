<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jumbotron;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class JumbotronController extends Controller
{
    /**
     * Tampilkan halaman list jumbotron
     */
    public function index()
    {
        $jumbotrons = Jumbotron::orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin.jumbotrons.index', compact('jumbotrons'));
    }

    /**
     * Simpan jumbotron baru (Respon JSON)
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'link' => 'nullable|string|max:500',
            'desc' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Jika validasi GAGAL, kembalikan error sbg JSON
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $data = [
            'title' => $request->title,
            'link' => $request->link,
            'desc' => $request->desc,
        ];

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('jumbotrons', 'public');
            $data['image'] = $imagePath;
        }

        Jumbotron::create($data);

        // Jika SUKSES, kembalikan pesan sukses sbg JSON
        return response()->json(['success' => 'Jumbotron berhasil ditambahkan.']);
    }

    /**
     * Ambil data jumbotron untuk form edit (Respon JSON)
     */
    public function edit(Jumbotron $jumbotron)
    {
        // Jika SUKSES, kembalikan data jumbotron sbg JSON
        return response()->json($jumbotron);
    }

    /**
     * Update data jumbotron (Respon JSON)
     */
    public function update(Request $request, Jumbotron $jumbotron)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'link' => 'nullable|string|max:500',
            'desc' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Jika validasi GAGAL, kembalikan error sbg JSON
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $data = [
            'title' => $request->title,
            'link' => $request->link,
            'desc' => $request->desc,
        ];

        // Handle image upload
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($jumbotron->image && Storage::disk('public')->exists($jumbotron->image)) {
                Storage::disk('public')->delete($jumbotron->image);
            }
            $imagePath = $request->file('image')->store('jumbotrons', 'public');
            $data['image'] = $imagePath;
        }

        $jumbotron->update($data);

        // Jika SUKSES, kembalikan pesan sukses sbg JSON
        return response()->json(['success' => 'Jumbotron berhasil diupdate.']);
    }

    /**
     * Hapus jumbotron
     */
    public function destroy(Jumbotron $jumbotron)
    {
        // Hapus gambar jika ada
        if ($jumbotron->image && Storage::disk('public')->exists($jumbotron->image)) {
            Storage::disk('public')->delete($jumbotron->image);
        }

        $jumbotron->delete();

        // Kirim respon sukses JSON
        return response()->json(['success' => 'Jumbotron berhasil dihapus.']);
    }
}
