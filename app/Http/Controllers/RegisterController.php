<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\CreateFolder;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view("register/index");
    }

    public function create(CreateFolder $request)
    {
        // フォルダモデルのインスタンスを作成する
        $user = new User();
        // タイトルに入力値を代入する
        $user->name = $request->username;
        $user->email = $request->email;
        $hashed_password =Hash::make($request->password);
        $user->password = $hashed_password;
        // インスタンスの状態をデータベースに書き込む
        $user->save();
        
        return redirect()->route('home');
    }
}
