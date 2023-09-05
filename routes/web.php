<?php

use App\Http\Controllers\EmailVerificationNotificationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetPasswordController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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
    return view('landing_page.index');
});

// tempat route dashboard disimpan
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return "masuk bang";
    })->name('dashboard');
});

Route::middleware('auth')->group(function () {

    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();

        return redirect()->route('dashboard');
    })->middleware('signed')->name('verification.verify');

    Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,60')->name('verification.send');

    Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');
});


Route::middleware('guest')->group(function () {

    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');

    Route::get('/register', [RegisterController::class, 'index'])->name('register.index');

    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

    Route::post('/login', [LoginController::class, 'store'])->name('login');

    Route::get('/forgot-password', function () {
        return view('auth.reset-pass');
    })->name('password.request');

    Route::post('/forgot-password', [ResetPasswordController::class, 'send'])->name('password.email');

    Route::get('/reset-password/{token}', function (string $token) {
        return view('auth.reset-password', ['token' => $token]);
    })->name('password.reset');

    Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');
});

Route::get('/article', function () {
    return view('article.index');
});

Route::get('/show', function () {
    return view('article.show');
});

// Route::middleware('auth')->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard.index');
//     })->name('dashboard');
// });
