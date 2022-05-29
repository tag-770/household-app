<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\CreateLogin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view("login/index");
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
           // $request->session()->regenerate();

            return redirect()->route('home');
        }
        return back();
        
    } 

    public function logout()
    {
        Auth::logout();
        return redirect()->route('toppage');
    }
}
