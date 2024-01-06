<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;    

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request){
        $request -> validate([
            'email' => 'required',
            'password' => 'required',
        ],[
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $infologin = [
            'email' => $request -> email,
            'password' => $request -> password,
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::user()->role == 'admin') {
                return redirect('/dashboard/admin');
            } elseif (Auth::user()->role == 'kontributor') {
                return redirect('/dashboard/kontributor');
            }elseif (Auth::user()->role == 'user') {
                return redirect('/dashboard/user');
            }
        } else {
            return redirect('/login')->withErrors('Email atau Password salah')->withInput();
        }
    }

    public function logout(){
        Auth::logout();
        return Redirect('/login');
    }
}
