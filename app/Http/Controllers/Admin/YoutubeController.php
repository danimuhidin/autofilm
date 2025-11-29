<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Youtube;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class YoutubeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $youtubes = Youtube::latest()->paginate(10);
        return view('admin.youtubes.index', compact('youtubes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'link' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        Youtube::create([
            'link' => $request->link,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Youtube link berhasil ditambahkan!'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $youtube = Youtube::findOrFail($id);
        return response()->json($youtube);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'link' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $youtube = Youtube::findOrFail($id);
        $youtube->update([
            'link' => $request->link,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Youtube link berhasil diperbarui!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $youtube = Youtube::findOrFail($id);
        $youtube->delete();

        return response()->json([
            'success' => true,
            'message' => 'Youtube link berhasil dihapus!'
        ]);
    }
}
