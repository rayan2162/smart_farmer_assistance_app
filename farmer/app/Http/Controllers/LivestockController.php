<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LivestockController extends Controller
{
    public function index()
    {
        // Fetch all livestock for the authenticated user
        $livestocks = DB::table('livestocks')->where('user_id', Auth::id())->get();
        return view('livestock.livestockPage', ['livestocks' => $livestocks]);
    }

    public function create()
    {
        // Return the view for creating new livestock
        return view('livestock.livestockPage');
    }

    public function store(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'animal_type' => 'required|string|max:255',
            'breed' => 'required|string|max:255',
            'quantity' => 'required|numeric|min:0',
            'age' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'health_status' => 'nullable|string|max:255',
            'date_acquired' => 'required|date',
            'location' => 'required|string|max:255',
            'notes' => 'nullable|string',
        ]);

        // Insert new livestock data into the database
        DB::table('livestocks')->insert([
            'animal_type' => $request->input('animal_type'),
            'breed' => $request->input('breed'),
            'quantity' => $request->input('quantity'),
            'age' => $request->input('age'),
            'gender' => $request->input('gender'),
            'health_status' => $request->input('health_status'),
            'date_acquired' => $request->input('date_acquired'),
            'location' => $request->input('location'),
            'notes' => $request->input('notes'),
            'user_id' => Auth::id(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('livestock.index')->with('success', 'Livestock added successfully.');
    }

    public function edit($id)
    {
        // Fetch the livestock to be edited
        $livestock = DB::table('livestocks')->where('id', $id)->where('user_id', Auth::id())->first();
        return view('livestock.editLivestockPage', ['livestock' => $livestock]);
    }

    public function update(Request $request, $id)
    {
        // Validate incoming request
        $request->validate([
            'animal_type' => 'required|string|max:255',
            'breed' => 'required|string|max:255',
            'quantity' => 'required|numeric|min:0',
            'age' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'health_status' => 'nullable|string|max:255',
            'date_acquired' => 'required|date',
            'location' => 'required|string|max:255',
            'notes' => 'nullable|string',
        ]);

        // Update livestock data in the database
        DB::table('livestocks')->where('id', $id)->where('user_id', Auth::id())->update([
            'animal_type' => $request->input('animal_type'),
            'breed' => $request->input('breed'),
            'quantity' => $request->input('quantity'),
            'age' => $request->input('age'),
            'gender' => $request->input('gender'),
            'health_status' => $request->input('health_status'),
            'date_acquired' => $request->input('date_acquired'),
            'location' => $request->input('location'),
            'notes' => $request->input('notes'),
            'updated_at' => now(),
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('livestock.index')->with('success', 'Livestock updated successfully.');
    }

    public function destroy($id)
    {
        // Delete the livestock from the database
        DB::table('livestocks')->where('id', $id)->where('user_id', Auth::id())->delete();
        return redirect()->route('livestock.index')->with('success', 'Livestock deleted successfully.');
    }
}
