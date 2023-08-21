<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProjekController;
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

Route::get('/home', function () {
    return view('dashboard.home');
});
Route::get('/cb', function () {
    return view('cb');
});

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

Route::get('/category', [CategoryController::class, 'index'] )->name('category.index');
Route::post('/category', [CategoryController::class, 'store'] )->name('category.store');
Route::get('/category/{id}', [CategoryController::class, 'edit'] )->name('category.edit');
Route::post('/category/{id}', [CategoryController::class, 'update'] )->name('category.update');
Route::get('/category-delete/{id}', [CategoryController::class, 'destroy'] )->name('category.delete');
