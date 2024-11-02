<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Login()
    {
        return view('auth.login');
    }

    public function LoginPost(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'user_name' => 'required|string|max:10', // Validación para el nombre de usuario
            'password' => 'required|string|min:6', // Puedes ajustar la longitud mínima
        ]);

        // Obtener las credenciales
        $credentials = [
            'user_name' => $request->user_name, // Cambia email a user_name
            'user_password' => $request->password, // Cambia password a user_password
        ];

        // Intentar autenticar al usuario
        if (Auth::attempt($credentials)) {
            return redirect('/auth/index')->with('success', 'Login successful');
        }

        return back()->with('error', 'Username or password is incorrect!');
    }

    public function Logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
