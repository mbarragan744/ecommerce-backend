<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::prefix('/products')->controller(ProductController::class)->group(function(){
    Route::get('/','index');
    Route::get('/create','create');
    Route::get('/show', 'show');

});


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/',[HomeController::class, ' welcome'] );