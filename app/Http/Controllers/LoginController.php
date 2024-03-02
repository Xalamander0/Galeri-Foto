<?php

namespace App\Http\Controllers;

use Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
         // Validate the form data
         $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Attempt to log in the user
        $credentials = $request->only('username', 'password');
        if (auth()->attempt($credentials)) {
            // Authentication passed...
            Alert::success('Berhasil!', 'Anda Berhasil Login!');
            return redirect()->route('dashboard'); // Redirect to the intended page after successful login
        }

        // Authentication failed...
        return redirect()->back()->withInput($request->only('username'))
            ->withErrors(['loginError' => 'Invalid credentials. Please try again.']);
    }


    public function logout()
    {
        Auth::logout();
        Alert::success('Hore!', 'Anda Berhasil Logout!');
        return redirect()->route('home');
    }
}
