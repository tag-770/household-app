<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AccountsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('toppage');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'create']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/account/create', [AccountController::class, 'accountcreate'])->name('accountcreate');
Route::post('/account/create', [AccountController::class, 'accountsend']);
Route::get('/accounts', [AccountController::class, 'accounts'])->name('accounts');
Route::get('/accounts/{account_id}', [AccountsController::class, 'show'])->name('accounts.details');
Route::post('/destroy{id}', [AccountController::class, 'destroy'])->name('account.destroy');
Route::get('/accounts/{id}/edit', [AccountController::class, 'edit'])->name('account.edit');

