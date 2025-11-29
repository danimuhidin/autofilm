<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class PartnerController extends Controller
{
    /**
     * Tampilkan halaman list partner
     */
    public function index()
    {
        $partners = Partner::paginate(10);

        return view('admin.partners.index', compact('partners'));
    }

    /**
     * Simpan partner baru (Respon JSON)
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'telp' => 'required|string|max:20',
        ]);

        // Jika validasi GAGAL, kembalikan error sbg JSON
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        Partner::create([
            'name' => $request->name,
            'address' => $request->address,
            'telp' => $request->telp,
        ]);

        // Jika SUKSES, kembalikan pesan sukses sbg JSON
        return response()->json(['success' => 'Partner berhasil ditambahkan.']);
    }

    /**
     * Ambil data partner untuk form edit (Respon JSON)
     */
    public function edit(Partner $partner)
    {
        // Jika SUKSES, kembalikan data partner sbg JSON
        return response()->json($partner);
    }

    /**
     * Update data partner (Respon JSON)
     */
    public function update(Request $request, Partner $partner)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'telp' => 'required|string|max:20',
        ]);

        // Jika validasi GAGAL, kembalikan error sbg JSON
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $partner->update([
            'name' => $request->name,
            'address' => $request->address,
            'telp' => $request->telp,
        ]);

        // Jika SUKSES, kembalikan pesan sukses sbg JSON
        return response()->json(['success' => 'Partner berhasil diupdate.']);
    }

    /**
     * Hapus partner
     */
    public function destroy(Partner $partner)
    {
        $partner->delete();

        // Kirim respon sukses JSON
        return response()->json(['success' => 'Partner berhasil dihapus.']);
    }
}
