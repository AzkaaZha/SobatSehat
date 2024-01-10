<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;  
use App\Models\User;
  

class AuthController extends Controller
{
    public function register() {
        return view('auth.register');
    }
    
    public function register_action(Request $request) {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'password_confirm' => 'required|same:password',
        ]);

        $email = $request->email;

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'role' => ($email === 'admin@gmail.com') ? User::ROLE_ADMIN : (($email === 'kontributor@gmail.com') ? User::ROLE_KONTRIBUTOR : User::ROLE_USER),
            'password' => bcrypt($request->password),
        ];

        User::create($data);

        return redirect()->route('login')->with('success', 'Register berhasil, silahkan login');
    }

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
                return redirect('/dashboard');
            } else if (Auth::user()->role == 'kontributor') {
                return redirect('/dashboard');
            } elseif (Auth::user()->role == 'user') {
                return redirect('/home');
            }
        } else {
            return redirect('/login')->withErrors('Email atau Password salah')->withInput();
        }
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/login')->with('success', 'Logout berhasil');
    }
}
