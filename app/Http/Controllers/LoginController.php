<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $username = $request->input('email');
        $password = $request->input('password');

        if ($username == 'admin' && $password == '123456') {

            session(['logged_in' => true]);

            return redirect()->route('admin.dashboard');

        } else {

            return back()->with('error', 'Invalid username or password');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('logged_in');

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}