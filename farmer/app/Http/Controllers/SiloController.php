<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SiloController extends Controller
{
    public function index()
    {
        // Fetch all silos for the authenticated user
        $silos = DB::table('silos')->where('user_id', Auth::id())->get();
        return view('silo.siloPage', ['silos' => $silos]);
    }

    public function create()
    {
        // Return the view for creating a new silo
        return view('silo.siloPage');
    }

    public function store(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'capacity' => 'required|numeric|min:0',
            'location' => 'required|string|max:255',
            'material' => 'nullable|string|max:255',
            'notes' => 'nullable|string',
        ]);

        // Insert new silo data into the database
        DB::table('silos')->insert([
            'name' => $request->input('name'),
            'type' => $request->input('type'),
            'capacity' => $request->input('capacity'),
            'location' => $request->input('location'),
            'material' => $request->input('material'),
            'notes' => $request->input('notes'),
            'user_id' => Auth::id(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('silo.index')->with('success', 'Silo added successfully.');
    }

    public function edit($id)
    {
        // Fetch the silo to be edited
        $silo = DB::table('silos')->where('id', $id)->where('user_id', Auth::id())->first();
        return view('silo.editSiloPage', ['silo' => $silo]);
    }

    public function update(Request $request, $id)
    {
        // Validate incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'capacity' => 'required|numeric|min:0',
            'location' => 'required|string|max:255',
            'material' => 'nullable|string|max:255',
            'notes' => 'nullable|string',
        ]);

        // Update silo data in the database
        DB::table('silos')->where('id', $id)->where('user_id', Auth::id())->update([
            'name' => $request->input('name'),
            'type' => $request->input('type'),
            'capacity' => $request->input('capacity'),
            'location' => $request->input('location'),
            'material' => $request->input('material'),
            'notes' => $request->input('notes'),
            'updated_at' => now(),
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('silo.index')->with('success', 'Silo updated successfully.');
    }

    public function destroy($id)
    {
        // Delete the silo from the database
        DB::table('silos')->where('id', $id)->where('user_id', Auth::id())->delete();
        return redirect()->route('silo.index')->with('success', 'Silo deleted successfully.');
    }
}
