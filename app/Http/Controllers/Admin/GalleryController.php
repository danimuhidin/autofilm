<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class GalleryController extends Controller
{
    /**
     * Tampilkan halaman list gallery
     */
    public function index()
    {
        $galleries = Gallery::paginate(12);

        return view('admin.galleries.index', compact('galleries'));
    }

    /**
     * Simpan gallery baru (Respon JSON)
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'desc' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Jika validasi GAGAL, kembalikan error sbg JSON
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $data = [
            'title' => $request->title,
            'category' => $request->category,
            'desc' => $request->desc,
        ];

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('galleries', 'public');
            $data['image'] = $imagePath;
        }

        Gallery::create($data);

        // Jika SUKSES, kembalikan pesan sukses sbg JSON
        return response()->json(['success' => 'Gallery berhasil ditambahkan.']);
    }

    /**
     * Ambil data gallery untuk form edit (Respon JSON)
     */
    public function edit(Gallery $gallery)
    {
        // Jika SUKSES, kembalikan data gallery sbg JSON
        return response()->json($gallery);
    }

    /**
     * Update data gallery (Respon JSON)
     */
    public function update(Request $request, Gallery $gallery)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'desc' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Jika validasi GAGAL, kembalikan error sbg JSON
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $data = [
            'title' => $request->title,
            'category' => $request->category,
            'desc' => $request->desc,
        ];

        // Handle image upload
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($gallery->image && Storage::disk('public')->exists($gallery->image)) {
                Storage::disk('public')->delete($gallery->image);
            }
            $imagePath = $request->file('image')->store('galleries', 'public');
            $data['image'] = $imagePath;
        }

        $gallery->update($data);

        // Jika SUKSES, kembalikan pesan sukses sbg JSON
        return response()->json(['success' => 'Gallery berhasil diupdate.']);
    }

    /**
     * Hapus gallery
     */
    public function destroy(Gallery $gallery)
    {
        // Hapus gambar jika ada
        if ($gallery->image && Storage::disk('public')->exists($gallery->image)) {
            Storage::disk('public')->delete($gallery->image);
        }

        $gallery->delete();

        // Kirim respon sukses JSON
        return response()->json(['success' => 'Gallery berhasil dihapus.']);
    }
}
