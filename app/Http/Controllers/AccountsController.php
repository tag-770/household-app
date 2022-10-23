<?php

namespace App\Http\Controllers;

use App\Models\Account;

class AccountsController extends Controller
{
    public function show()
    {
        return view("accounts/show");
    }

    public function accountsshow()
    {
        $my_accounts = Account::where('user_id', '=', 1)->get();
        return view("accounts/show")->with('accounts', $my_accounts);

    }

    
}
