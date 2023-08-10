<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function Login()
    {
        if (Auth::check()) {
            return redirect('home');
        } else {
            return view('auth.login');
        }
    }

    public function actionLogin(Request $request)
    {
        $data = $request->only('email', 'password');
        // dd($data, password_hash($request->input('password'), PASSWORD_DEFAULT));
        if (Auth::viaRemember()) {
            return redirect('home');
        }
        if (Auth::attempt($data, true)) {
            return redirect('home');
        } else {
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }

    public function actionLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
