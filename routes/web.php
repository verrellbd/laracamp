<?php

use Illuminate\Support\Facades\Route;

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
})->name('welcome');

Route::get('checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('success-checkout', function () {
    return view('success_checkout');
})->name('success-checkout');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


//Socialite Route
Route::get('sign-in-google', 'UserController@google')->name('user.login.google');
Route::get('auth/google/callback', 'UserController@handleProviderCallback')->name('user.google.callback');


require __DIR__ . '/auth.php';
