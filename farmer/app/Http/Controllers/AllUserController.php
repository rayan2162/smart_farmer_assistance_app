<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllUserController extends Controller
{
    public function index()
    {
        // Fetch all users who are approved
        $users = DB::table('users')->where('approved', 1)->get(['id', 'name', 'email']);

        // Return the view with the users
        return view('admin.allUser', ['users' => $users]);
    }

    public function edit($id)
    {
        // Fetch the user by id
        $user = DB::table('users')->where('id', $id)->first();

        // Return the view to edit the user
        return view('admin.editUser', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        // Validate and update the user data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255'
        ]);

        DB::table('users')->where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        // Redirect back to the all users page with a success message
        return redirect()->route('admin.all-users')->with('success', 'User updated successfully');
    }

    public function destroy($id)
    {
        // Delete the user by id
        DB::table('users')->where('id', $id)->delete();

        // Redirect back to the all users page with a success message
        return redirect()->route('admin.all-users')->with('success', 'User deleted successfully');
    }
}
