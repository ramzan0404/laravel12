<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Static credentials
        $email = 'admin@admin.com';
        $password = '1234';

        if (
            $request->email === $email &&
            $request->password === $password
        ) {
            // store static user in session
            $request->session()->put('member', [
                'email' => $email,
                'name' => 'Admin'
            ]);

            return redirect('/product')->with('message', 'Login successful');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials',
        ]);
    }

    public function logout(Request $request)
    {
        $request->session()->forget('member');
        return redirect('/login')->with('message', 'Logged out successfully');
    }
}
