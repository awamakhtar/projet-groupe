<?php
use App\Http\Controllers\ProduitController;

use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// Route::get('/home', [ProduitController::class, 'index'])->name('home');
// Route::get('/about', [ProduitController::class, 'about'])->name('about');
// Route::get('/sign', [loginController::class, 'sign'])->name('sign');
// Route::get('/login', [loginController::class, 'login'])->name('login');
// Route::get('/details',[ProduitController::class, 'details'])->name('details');

Route::get('/', function () {
    return view('index');
});

Route::get('/whislist', function () {
    return view('whislist');
});
Auth::routes();

Route::get('/index', function () {
    return redirect('/index');
});

Route::get('/home',[ProduitController::class, 'index'])->name('home');
Route::get('/about',[ProduitController::class, 'about'])->name('about');
Route::get('/footer',[ProduitController::class, 'footer'])->name('footer');
Route::get('/contact', [ProduitController::class, 'contact'])->name('contact');
Route::get('/sign',[loginController::class, 'register'])->name('sign');
Route::get('/login', [loginController::class, 'login'])->name('login');

Route::get('/checkout', [ProduitController::class, 'checkout'])->name('checkout');
Route::get('/AddCart', [ProduitController::class, 'AddCart'])->name('AddCart');

Route::get('/whislist',[ProduitController::class, 'whislist'])->name('whislist');
Route::get('/details',[ProduitController::class, 'details'])->name('details');
Route::get('/register-user', [loginController::class, 'create'])->name('create-user');



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
