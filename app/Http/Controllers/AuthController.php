<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('cine.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autenticación exitosa
            if (Auth::user()->isAdmin()) {
                // Redirige al panel de control del administrador
                return redirect()->route('admin_movie_maker');
            } else {
                // Redirige a la página de inicio del usuario
                return redirect()->route('cine_home_user');
            }
        }

        // Autenticación fallida
        return back()->withErrors(['email' => 'Incorrect email or password']);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
