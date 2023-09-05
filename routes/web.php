<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\ProjekController;
use App\Http\Controllers\VisitorController;
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

Route::get('/', [VisitorController::class, 'index'])->name('visitor.index');

Route::get('/cb', function () {
    return view('cb');
});

// tempat route dashboard disimpan
Route::middleware('guest')->group(function () {
    Route::get('/dashboard', [ChartController::class, 'daily_visitor'])->name('dashboard');

    Route::get('/project', [ProjekController::class, 'index'])->name('project.index');
    Route::post('/project', [ProjekController::class, 'store'])->name('project.store');
    Route::get('/project-delete/{id}', [ProjekController::class, 'destroy'])->name('project.delete');
    Route::get('/project/{id}', [ProjekController::class, 'edit'])->name('project.edit');
    Route::post('/project/{id}', [ProjekController::class, 'update'])->name('project.update');

    Route::get('/portofolio', [ArtikelController::class, 'index'])->name('portofolio.index');
    Route::post('/portofolio', [ArtikelController::class, 'store'])->name('portofolio.store');
    Route::get('/portofolio/{id}', [ArtikelController::class, 'edit'])->name('portofolio.edit');
    Route::post('/portofolio/{id}', [ArtikelController::class, 'update'])->name('portofolio.update');
    Route::get('/portofolio-delete/{id}', [ArtikelController::class, 'destroy'])->name('portofolio.delete');

    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category-delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');

    Route::get('/daily', [ChartController::class, 'daily_visitor'])->name('chart.dashboard');
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
