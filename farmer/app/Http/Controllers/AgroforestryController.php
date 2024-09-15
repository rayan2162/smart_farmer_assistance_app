<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class AgroforestryController extends Controller
{
    public function index()
    {
        $agroforestries = DB::table('agroforestries')->where('user_id', Auth::id())->get();
        return view('agroforestry.agroforestryPage', ['agroforestries' => $agroforestries]);
    }

    public function create()
    {
        return view('agroforestry.agroforestryPage');
    }

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

        DB::table('agroforestries')->insert([
            'name' => $request->input('name'),
            'type' => $request->input('type'),
            'planting_date' => $request->input('planting_date'),
            'harvest_date' => $request->input('harvest_date'),
            'quantity' => $request->input('quantity'),
            'location' => $request->input('location'),
            'notes' => $request->input('notes'),
            'user_id' => Auth::id(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('agroforestry.index')->with('success', 'Agroforestry added successfully.');

    }

    public function edit($id)
    {
        $agroforestry = DB::table('agroforestries')->where('id', $id)->where('user_id', Auth::id())->first();
        return view('agroforestry.editAgroforestryPage', ['agroforestry' => $agroforestry]);
    }

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

        DB::table('agroforestries')->where('id', $id)->where('user_id', Auth::id())->update([
            'name' => $request->input('name'),
            'type' => $request->input('type'),
            'planting_date' => $request->input('planting_date'),
            'harvest_date' => $request->input('harvest_date'),
            'quantity' => $request->input('quantity'),
            'location' => $request->input('location'),
            'notes' => $request->input('notes'),
            'updated_at' => now(),
        ]);

        return redirect()->route('agroforestry.index')->with('success', 'Agroforestry updated successfully.');
    }

    public function destroy($id)
    {
        DB::table('agroforestries')->where('id', $id)->where('user_id', Auth::id())->delete();
        return redirect()->route('agroforestry.index')->with('success', 'Agro-forestry entry deleted successfully.');
    }

}