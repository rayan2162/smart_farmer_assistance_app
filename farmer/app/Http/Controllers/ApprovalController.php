<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApprovalController extends Controller
{
    public function index()
    {
        // Fetch users who are not approved
        $users = DB::table('users')->where('approved', 0)->get(['id', 'name', 'email']);

        // Return the view with the users
        return view('admin.users', ['users' => $users]);
    }

    public function approve($id)
    {
        // Update the approved status of the user
        DB::table('users')->where('id', $id)->update(['approved' => 1]);

        // Redirect back to the unapproved users page
        return redirect()->route('admin.users')->with('success', 'User approved successfully');
    }
}
