<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ],[
            'email.required' =>'Please enter your email'
        ]);
        $credentials = $request->only('email', 'password');
        // Password = admin@789
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role === 'admin') {
            return redirect()->route('admin.panel');
            } else {
            Auth::logout();
            return redirect()->back()->withErrors(['role' => 'Unauthorized role.']);
            }
        } else {
            return redirect()->back()->withErrors(['email' => 'Invalid credentials.']);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('status', 'You have been logged out.');
    }
}
