<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Account;

class AccountController extends Controller
{
    public function accountcreate()
    {
        return view("account/index");
    }

    public function accountsend(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'amount' => ['required', 'integer', 'min:1'],
        ]);

        $user = Auth::id();

        Account::create([
            'title' => $request->title,
            'amount' => $request->amount,
            'memo' => $request->memo,
            'user_id' => $user
        ]);

        return redirect()->route('home');
    }

    public function accounts()
    {
        $user = Auth::id();

        $users = Account::where('user_id', '=', $user)
            ->get();

        return view("accounts")->with('accounts', $users);
    }
        
 }

    

