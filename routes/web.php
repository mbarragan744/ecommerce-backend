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

Route::get('/',HomeController::class );

Route::prefix('/products')->group(function(){
    Route::get('', [ProductController::class, 'index']);
    Route::get('/create', [ProductController::class, 'create']);
    Route::get('/{name}/{categoria?}', [ProductController::class, 'show']);

});

