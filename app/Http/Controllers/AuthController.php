<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('user_name', 'user_password');

        // Validación de campos
        $request->validate([
            'user_name' => 'required|user_name',
            'user_password' => 'required|string',
        ]);

        // Intentar iniciar sesión
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }

        // Si falla el login
        return back()->withErrors([
            'user_name' => 'Credenciales incorrectas.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
