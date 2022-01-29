<?php

use App\Http\Controllers\User\CheckoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\DashboardController as UserDashboard;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\CheckoutController as AdminCheckout;
use App\Http\Controllers\UserController;

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


//Socialite Route
Route::get('sign-in-google', 'UserController@google')->name('user.login.google');
Route::get('auth/google/callback', 'UserController@handleProviderCallback')->name('user.google.callback');

//Midtrans Routes
Route::get('payment/success', [CheckoutController::class, 'midtransCallback']);
Route::post('payment/success', [CheckoutController::class, 'midtransCallback']);

Route::middleware(['auth'])->group(function () {
    Route::get('checkout/success', 'User\CheckoutController@success')->name('checkout.success')->middleware('ensureUserRole:user');
    Route::get('checkout/{camp:slug}', 'User\CheckoutController@create')->name('checkout.create')->middleware('ensureUserRole:user');
    Route::post('checkout/{camp}', 'User\CheckoutController@store')->name('checkout.store')->middleware('ensureUserRole:user');

    //dashboard
    Route::get('dashboard', 'HomeController@dashboard')->name('dashboard');

    //user dashboard
    Route::prefix('user/dashboard')->namespace('User')->name('user.')->middleware('ensureUserRole:user')->group(function () {
        Route::get('/', [UserDashboard::class, 'index'])->name('dashboard');
        Route::get('checkout/invoice/{checkout}', [CheckoutController::class, 'invoice'])->name('checkout.invoice');
    });

    //admin dashboard
    Route::prefix('admin/dashboard')->namespace('Admin')->name('admin.')->middleware('ensureUserRole:admin')->group(function () {
        Route::get('/', [AdminDashboard::class, 'index'])->name('dashboard');

        //admin checkout
        Route::post('checkout/{checkout}',  [AdminCheckout::class, 'update'])->name('checkout.update');
    });
});



require __DIR__ . '/auth.php';
