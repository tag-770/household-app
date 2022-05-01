<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\CreateFolder;

class RegisterController extends Controller
{
    public function index()
    {
        return view("register/index");
    }

    public function create(CreateFolder $request)
    {
        // dd($request->all());
    // フォルダモデルのインスタンスを作成する
    $user = new User();
    // タイトルに入力値を代入する
    $user->name = $request->username;
    $user->email = $request->email;
    $user->password = $request->password;
    // インスタンスの状態をデータベースに書き込む
    $user->save();

    return redirect()->route('home.index', [
        'id' => $user->id,
    ]);
    }
}
