<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class LoginController extends Controller
{

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            // Autenticación exitosa para el modelo Admin
            return redirect()->route('admin_movie_maker');
        }

        // Autenticación fallida
        return back()->withErrors(['email' => 'Wrong email or password']);
    }
}
