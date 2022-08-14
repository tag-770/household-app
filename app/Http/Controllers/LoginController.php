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

        $user_id = Auth::id();

        if (Auth::attempt($credentials)) {
            // $user_name = Account::where('user_id', '=', $user_id)->get();
            // dd($user_name);
            return redirect()->route('home')->with('success_login', '$user_nameさん、ようこそ');
        }
        return back();
        
    } 

    public function logout()
    {
        Auth::logout();
        return redirect()->route('toppage');
    }
}
