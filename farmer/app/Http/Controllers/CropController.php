<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CropController extends Controller
{
    // Display a listing of the crops
    public function index()
    {
        $crops = DB::table('crops')->get();
        return view('crop.cropPage', ['crops' => $crops]);
    }

    // Show the form for creating a new crop
    public function create()
    {
        return view('crop.cropPage');
    }

    // Store a newly created crop in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'planting_date' => 'required|date',
            'harvest_date' => 'nullable|date|after_or_equal:planting_date',
            'quantity' => 'required|integer',
            'location' => 'required|string|max:255',
            'notes' => 'nullable|string',
        ]);

        DB::table('crops')->insert([
            'name' => $request->input('name'),
            'type' => $request->input('type'),
            'planting_date' => $request->input('planting_date'),
            'harvest_date' => $request->input('harvest_date'),
            'quantity' => $request->input('quantity'),
            'location' => $request->input('location'),
            'notes' => $request->input('notes'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('crop.index')->with('success', 'Crop added successfully.');
    }

    // Show the form for editing the specified crop
public function edit($id)
{
    $crop = DB::table('crops')->where('id', $id)->first();
    return view('crop.editCropPage', ['crop' => $crop]);
}

// Update the specified crop in storage
public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'type' => 'required|string|max:255',
        'planting_date' => 'required|date',
        'harvest_date' => 'nullable|date|after_or_equal:planting_date',
        'quantity' => 'required|integer',
        'location' => 'required|string|max:255',
        'notes' => 'nullable|string',
    ]);

    DB::table('crops')->where('id', $id)->update([
        'name' => $request->input('name'),
        'type' => $request->input('type'),
        'planting_date' => $request->input('planting_date'),
        'harvest_date' => $request->input('harvest_date'),
        'quantity' => $request->input('quantity'),
        'location' => $request->input('location'),
        'notes' => $request->input('notes'),
        'updated_at' => now(),
    ]);

    return redirect()->route('crop.index')->with('success', 'Crop updated successfully.');
}
}