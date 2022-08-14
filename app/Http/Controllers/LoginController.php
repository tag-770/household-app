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
            $user = Auth::user();
            return redirect()->route('home')->with('success_login', $user->name.'さん、ようこそ');
        }
        return back();
        
    } 

    public function logout()
    {
        $user = Auth::user();
        Auth::logout();
        return redirect()->route('toppage')->with('success_logout', $user->name.'さん、お疲れ様でした。');
    }
}
