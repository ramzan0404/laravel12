<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\Member;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    function showLoginForm()
    {
        return view('login');
    }

    function login(Request $request)
{
    $request->session()->flash('messgae','Login successfull'); // for flash login message
    $member = Member::where('email', $request->email)->first();

    if ($member && \Hash::check($request->password, $member->password)) {
        $request->session()->put('member', $member);
        return redirect('/product'); // Redirect to your CRUD page
    } else {
        return back()->withErrors([
            'email' => 'Invalid credentials',
            
        ]);
    }
}

function logout(Request $request)
{
    $request->session()->forget('member');
    return redirect('/login')->with('message', 'Logged out successfully');
}

}


