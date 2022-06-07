<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Account;

class AccountController extends Controller
{
    public function accountcreate()
    {
        return view("account/index");
    }

    public function accountsend(Request $request)
    {
        dd();
        //インスタンス作成
        $account = new Account();

        //$account = Account::create();

        Account::create([
            'title' => $request->title,
            'amount' => $request->amount,
            'memo' => $request->memo,
        ]);
        dd();

        return redirect()->route('home');
    }
        
 }

    

