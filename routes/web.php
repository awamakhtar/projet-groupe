<?php

use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});
Route::get('/sign-up', function () {
    return view('sign');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/whislist', function () {
    return view('whislist');
});
Route::get('/about', function () {
    return view('about');
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
