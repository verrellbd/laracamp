<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Checkout;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $checkouts = Checkout::with('Camp')->whereUserId(Auth::id())->get();
        return view('admin.dashboard', ['checkouts' => $checkouts]);
    }
}
