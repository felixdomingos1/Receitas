<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class LoginController extends Controller
{
   
    use AuthenticatesUsers;

    public function showLoginForm() 
    {

    public function index() {
        if (Auth::id()) {
            return view('layouts.home');
        }

        return view('auth.login');
    }


    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/home')->with('user', $credentials); // Redirecionar para a página desejada após o login
            
        }else {
            return back()->withErrors(['login' => 'Credenciais inválidas.']);
        }

        return redirect('/login')->with('error', 'Credenciais inválidas');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

}
