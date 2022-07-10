<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Account;

class AccountController extends Controller
{
    public function accountcreate()
    {
        $user = Auth::id();
        dd($user);
        return view("account/index");
    }

    public function accountsend(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'amount' => ['required', 'integer', 'min:1'],
        ]);

        Account::create([
            'title' => $request->title,
            'amount' => $request->amount,
            'memo' => $request->memo,
        ]);

        return redirect()->route('home');
    }
        
 }

    

