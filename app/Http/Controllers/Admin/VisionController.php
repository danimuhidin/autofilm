<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vision;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vision = Vision::first();
        return view('admin.visions.index', compact('vision'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'desc' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        Vision::create([
            'desc' => $request->desc,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Vision berhasil ditambahkan!'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vision = Vision::findOrFail($id);
        return response()->json($vision);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'desc' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $vision = Vision::findOrFail($id);
        $vision->update([
            'desc' => $request->desc,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Vision berhasil diperbarui!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vision = Vision::findOrFail($id);
        $vision->delete();

        return response()->json([
            'success' => true,
            'message' => 'Vision berhasil dihapus!'
        ]);
    }
}
