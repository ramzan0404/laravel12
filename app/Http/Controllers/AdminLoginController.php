<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }
    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    $admin = Admin::where('email', $request->email)->first();

    if ($admin && Hash::check($request->password, $admin->password)) {
        session()->put('admin', $admin);

        return redirect()->route('student.index')
            ->with('success', 'Admin Login successfully.');
    }

    return back()->withErrors([
        'email' => 'Invalid credentials'
    ]);
}

    public function logout()
    {
        session()->forget('admin');
        return redirect()->route('admin.login');
    }
}
