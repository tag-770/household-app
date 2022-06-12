<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    public function accountcreate()
    {
        return view("account/index");
    }

    public function accountsend(Request $request)
    {
        Account::create([
            'title' => $request->title,
            'amount' => $request->amount,
            'memo' => $request->memo,
        ]);

        return redirect()->route('home');
    }
        
 }

    

