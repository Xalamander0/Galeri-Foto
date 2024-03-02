<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
         // Validasiin kan
         $request->validate([
            'nama_lengkap' => 'required|string',
            'username' => 'required|string|unique:users',
            'alamat' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:4|confirmed',
        ]);

        // buat user baru coyy
        $user = User::create([
            'nama_lengkap' => $request->input('nama_lengkap'),
            'username' => $request->input('username'),
            'alamat' => $request->input('alamat'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        // kelaurin alert klo udh kelar
        Alert::success('Hore!', 'Anda Berhasil Registrasi. Silahkan login!');

        // arahin kesono
        return redirect()->route('login.show');
    }
}
