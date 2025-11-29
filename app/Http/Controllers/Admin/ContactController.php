<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ContactController extends Controller
{
    /**
     * Tampilkan halaman list contact
     */
    public function index()
    {
        $contacts = Contact::paginate(10);

        return view('admin.contacts.index', compact('contacts'));
    }

    /**
     * Simpan contact baru (Respon JSON)
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'telp' => 'required|string|max:20',
        ]);

        // Jika validasi GAGAL, kembalikan error sbg JSON
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        Contact::create([
            'name' => $request->name,
            'telp' => $request->telp,
        ]);

        // Jika SUKSES, kembalikan pesan sukses sbg JSON
        return response()->json(['success' => 'Contact berhasil ditambahkan.']);
    }

    /**
     * Ambil data contact untuk form edit (Respon JSON)
     */
    public function edit(Contact $contact)
    {
        // Jika SUKSES, kembalikan data contact sbg JSON
        return response()->json($contact);
    }

    /**
     * Update data contact (Respon JSON)
     */
    public function update(Request $request, Contact $contact)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'telp' => 'required|string|max:20',
        ]);

        // Jika validasi GAGAL, kembalikan error sbg JSON
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $contact->update([
            'name' => $request->name,
            'telp' => $request->telp,
        ]);

        // Jika SUKSES, kembalikan pesan sukses sbg JSON
        return response()->json(['success' => 'Contact berhasil diupdate.']);
    }

    /**
     * Hapus contact
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        // Kirim respon sukses JSON
        return response()->json(['success' => 'Contact berhasil dihapus.']);
    }
}
