<?php

use App\Http\Controllers\ResetPasswordController;
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


Route::middleware('guest')->group(function () {

    Route::get('/login', function () {
        return view('login-page.login');
    })->name('login');

    Route::get('/forgot-password', function () {
        return view('login-page.reset-pass');
    })->name('password.request');

    Route::post('/forgot-password', [ResetPasswordController::class, 'send'])->name('password.email');

    Route::get('/reset-password/{token}', function (string $token) {
        // return view('auth.reset-password', ['token' => $token]);
        return 'berhasil reset password';
    })->middleware('guest')->name('password.reset');
});

Route::get('/article', function () {
    return view('article.index');
});

Route::get('/show', function () {
    return view('article.show');
});
