<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $missions = Mission::latest()->paginate(10);
        return view('admin.missions.index', compact('missions'));
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

        Mission::create([
            'desc' => $request->desc,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Mission berhasil ditambahkan!'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mission = Mission::findOrFail($id);
        return response()->json($mission);
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

        $mission = Mission::findOrFail($id);
        $mission->update([
            'desc' => $request->desc,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Mission berhasil diperbarui!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mission = Mission::findOrFail($id);
        $mission->delete();

        return response()->json([
            'success' => true,
            'message' => 'Mission berhasil dihapus!'
        ]);
    }
}
