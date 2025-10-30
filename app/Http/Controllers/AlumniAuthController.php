<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlumniAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('alumni.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('alumni')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/alumni/dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('alumni')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/alumni/login');
    }
}

