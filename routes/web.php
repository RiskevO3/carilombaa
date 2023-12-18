<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\authController;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Passwords\Confirm;
use App\Livewire\Auth\Passwords\Email;
use App\Livewire\Auth\Passwords\Reset;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Verify;
use App\Livewire\DetailLomba;
use App\Livewire\FormPendaftaranLomba;
use App\Livewire\Home;
use App\Livewire\HomeLogin;
use App\Livewire\Profile;
use App\Livewire\ProfileDetail;
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
Route::get('/',Home::class)->name('home');

Route::get('lomba/{slug}',DetailLomba::class)->name('detail_lomba');


Route::get('microsoft/auth',[authController::class,'microsoftLogin'])->name('microsoft_login');

Route::get('google/auth',[authController::class,'googleLogin'])->name('google_login');

Route::get('microsoft/auth/callback',[authController::class,'microsoftAuthCallback']);

Route::get('google/auth/callback',[authController::class,'googleAuthCallback']);

Route::get('dikti/{name}',[authController::class,'getDiktiVerification']);

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
    
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
    ->middleware('signed')
    ->name('verification.verify');
});

Route::middleware('auth')->group(function () {

    Route::get('/daftar-lomba/{uuid}',FormPendaftaranLomba::class)->name('daftar_lomba');

    Route::get('/lomba',HomeLogin::class)->name('loginhome');

    Route::get('/profile',Profile::class)->name('profile');

    Route::get('/dashboard',ProfileDetail::class)->name('dashboard');

    Route::get('logout', LogoutController::class)
        ->name('logout');
});
