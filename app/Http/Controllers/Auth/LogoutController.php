<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LogoutController extends Controller
{
    public function __invoke(): RedirectResponse
    {
        session()->flash('success', 'Logout berhasil!, Sampai jumpa lagi '.Auth::user()->name.'!');
        Auth::logout();

        return redirect(route('home'));
    }
}
