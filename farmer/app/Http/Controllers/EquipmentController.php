<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EquipmentController extends Controller
{
    public function index()
    {
        $equipments = DB::table('equipments')->where('user_id', Auth::id())->get();
        return view('equipment.equipmentPage', ['equipments' => $equipments]);
    }

    public function create()
    {
        return view('equipment.equipmentPage');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'manufacturer' => 'required|string|max:255',
            'purchase_date' => 'required|date',
            'cost' => 'required|numeric|min:0',
            'condition' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'notes' => 'nullable|string',
        ]);

        DB::table('equipments')->insert([
            'name' => $request->input('name'),
            'type' => $request->input('type'),
            'manufacturer' => $request->input('manufacturer'),
            'purchase_date' => $request->input('purchase_date'),
            'cost' => $request->input('cost'),
            'condition' => $request->input('condition'),
            'location' => $request->input('location'),
            'notes' => $request->input('notes'),
            'user_id' => Auth::id(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('equipment.index')->with('success', 'Equipment added successfully.');
    }

    public function edit($id)
    {
        $equipment = DB::table('equipments')->where('id', $id)->where('user_id', Auth::id())->first();
        return view('equipment.editEquipmentPage', ['equipment' => $equipment]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'manufacturer' => 'required|string|max:255',
            'purchase_date' => 'required|date',
            'cost' => 'required|numeric|min:0',
            'condition' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'notes' => 'nullable|string',
        ]);

        DB::table('equipments')->where('id', $id)->where('user_id', Auth::id())->update([
            'name' => $request->input('name'),
            'type' => $request->input('type'),
            'manufacturer' => $request->input('manufacturer'),
            'purchase_date' => $request->input('purchase_date'),
            'cost' => $request->input('cost'),
            'condition' => $request->input('condition'),
            'location' => $request->input('location'),
            'notes' => $request->input('notes'),
            'updated_at' => now(),
        ]);

        return redirect()->route('equipment.index')->with('success', 'Equipment updated successfully.');
    }

    public function destroy($id)
    {
        DB::table('equipments')->where('id', $id)->where('user_id', Auth::id())->delete();
        return redirect()->route('equipment.index')->with('success', 'Equipment deleted successfully.');
    }
}
