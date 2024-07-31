<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function attemptLogin(\Illuminate\Http\Request $request)
    {
        return Auth::attempt(
            $this->credentials($request) + ['approved' => 1],
            $request->filled('remember')
        );
    }

    protected function redirectTo()
    {
        if (Auth::user()->isAdmin) {
            return '/admin/dashboard';
        }

        return '/home';
    }
}
