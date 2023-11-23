<?php
use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;


Route::get('/home', [ProduitController::class, 'index'])->name('home');
Route::get('/about', [ProduitController::class, 'about'])->name('about');
Route::get('/sign', [ProduitController::class, 'sign'])->name('sign');
Route::get('/login', [ProduitController::class, 'login'])->name('login');
Route::get('/details',[ProduitController::class, 'details'])->name('details');

Route::get('/', function () {
    return view('index');
});

Route::get('/whislist', function () {
    return view('whislist');
});
Route::get('/home',[ProduitController::class, 'index'])->name('home');
Route::get('/about',[ProduitController::class, 'about'])->name('about');
Route::get('/sign',[ProduitController::class, 'sign'])->name('sign');
Route::get('/whislist',[ProduitController::class, 'whislist'])->name('whislist');
Route::get('/details',[ProduitController::class, 'details'])->name('details');


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
