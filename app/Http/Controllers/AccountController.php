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

        $user_id = Auth::id();

        Account::create([
            'title' => $request->title,
            'amount' => $request->amount,
            'memo' => $request->memo,
            'user_id' => $user_id,
        ]);

        return redirect()->route('home')->with('success_account_register', '家計簿を正常に追加しました。');
    }

    public function accounts()
    {
        $user_id = Auth::id();

        $my_accounts = Account::where('user_id', '=', $user_id)->get();

        return view("accounts")->with('accounts', $my_accounts);
    }
        
 }

    

