<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class TestimonialController extends Controller
{
    /**
     * Tampilkan halaman list testimonial
     */
    public function index()
    {
        $testimonials = Testimonial::paginate(10);

        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Simpan testimonial baru (Respon JSON)
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'desc' => 'required|string',
        ]);

        // Jika validasi GAGAL, kembalikan error sbg JSON
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        Testimonial::create([
            'name' => $request->name,
            'desc' => $request->desc,
        ]);

        // Jika SUKSES, kembalikan pesan sukses sbg JSON
        return response()->json(['success' => 'Testimonial berhasil ditambahkan.']);
    }

    /**
     * Ambil data testimonial untuk form edit (Respon JSON)
     */
    public function edit(Testimonial $testimonial)
    {
        // Jika SUKSES, kembalikan data testimonial sbg JSON
        return response()->json($testimonial);
    }

    /**
     * Update data testimonial (Respon JSON)
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'desc' => 'required|string',
        ]);

        // Jika validasi GAGAL, kembalikan error sbg JSON
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $testimonial->update([
            'name' => $request->name,
            'desc' => $request->desc,
        ]);

        // Jika SUKSES, kembalikan pesan sukses sbg JSON
        return response()->json(['success' => 'Testimonial berhasil diupdate.']);
    }

    /**
     * Hapus testimonial
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();

        // Kirim respon sukses JSON
        return response()->json(['success' => 'Testimonial berhasil dihapus.']);
    }
}
