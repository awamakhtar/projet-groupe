<?php

use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;


Route::get('/home', [ProduitController::class, 'index'])->name('home');
Route::get('/about', [ProduitController::class, 'about'])->name('about');
Route::get('/sign', [ProduitController::class, 'register'])->name('sign');
Route::get('/login', [ProduitController::class, 'login'])->name('login');

Route::get('/details', function () {
    return view('details');
});



Route::controller(ProduitController::class)->group(function () {

    Route::get('/', 'index');
    Route::get('/produit/create', 'create');
    Route::get('/index',[ProduitController::class, 'index']);
    Route::get('/produit/{id}', 'show');
    Route::get('/produit/{id}/edit', 'edit');


    Route::post('/produit', 'store');
    Route::patch('/produit/{id}', 'update');
    Route::delete('/produit/{id}', 'destroy');

});

// Auth::routes();


// Route::get('/index', [HomeController::class, 'index'])->name('index');
// Route::get('/login', [loginController::class, 'login'])->name('login');
// Route::get('/register', [loginController::class, 'register'])->name('register');
// Route::get('/register-user', [loginController::class, 'create'])->name('create-user');
