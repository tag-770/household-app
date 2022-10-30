<?php

namespace App\Http\Controllers;

use App\Models\Account;

class AccountsController extends Controller
{
    public function show($account_id)
    {
        $my_accounts = Account::where('id', '=', $account_id)->first();
        return view("accounts/show")->with('accounts', $my_accounts);
    }
}
