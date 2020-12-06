<?php

use App\Http\Controllers\ProductController;
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
    return view('home');
});
Route::get('/product', [ProductController::class, 'viewproduct']);

Route::get('/insertproduct', function () {
    return view('insertproduct');
});
Route::get('/productinserted', function () {
    return view('productinserted');
});
Route::get('/orderingprocess', function () {
    return view('orderingprocess');
});
Route::post('/inputorder', [ProductController::class, 'inputorder']);
Route::get('/deleteorder/{id}', [ProductController::class, 'deleteorder']);
Route::get('/editproduct/{id}', [ProductController::class, 'editproduct']);
Route::post('/updateorder/{id}', [ProductController::class, 'updateorder']);
