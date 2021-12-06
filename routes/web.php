<?php

use App\Http\Controllers\User\CheckoutController;
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

Route::middleware(['auth'])->group(function () {
    Route::get('checkout/success', 'User\CheckoutController@success')->name('checkout.success');
    Route::get('checkout/{camp:slug}', 'User\CheckoutController@create')->name('checkout.create');
    Route::post('checkout/{camp}', 'User\CheckoutController@store')->name('checkout.store');

    Route::get('dashboard', 'HomeController@dashboard')->name('dashboard');
});


//Socialite Route
Route::get('sign-in-google', 'UserController@google')->name('user.login.google');
Route::get('auth/google/callback', 'UserController@handleProviderCallback')->name('user.google.callback');




require __DIR__ . '/auth.php';
