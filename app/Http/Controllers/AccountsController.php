<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Account;

class AccountsController extends Controller
{
    public function accounts()
    {
        return view("accounts/show");
    }

    public function accountsshow()
    {
        $my_accounts = Account::where('user_id', '=', 1)->get();
        return view("accounts/show")->with('accounts', $my_accounts);

    }

    
}
