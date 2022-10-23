<?php

namespace App\Http\Controllers;

use App\Models\Account;

class AccountsController extends Controller
{
    public function show()
    {
        $my_accounts = Account::where('id', '=', 1)->first();
        return view("accounts/show")->with('accounts', $my_accounts);
    }
}
