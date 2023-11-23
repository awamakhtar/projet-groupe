<?php

use App\Http\Controllers\ProduitController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\loginController;
// use App\Http\Controllers\registerController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('index2');
});
Route::get('/sign-up', function () {
    return view('sign');
});

Route::get('/about', function () {
    return view('about');
});

Route::controller(ProduitController::class)->group(function () {

    Route::get('/', 'index');
    Route::get('/produit/create', 'create');
    Route::get('/index', [ProduitController::class, 'index']);
    Route::get('/produit/{id}', 'show');
    Route::get('/produit/{id}/edit', 'edit');



});

Auth::routes();

Route::get('/index', function () {
    return redirect('/index');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/login', [loginController::class, 'login'])->name('login');
Route::get('/register', [loginController::class, 'register'])->name('register');
Route::get('/register-user', [loginController::class, 'create'])->name('create-user');
