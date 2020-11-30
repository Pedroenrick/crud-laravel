<?php

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

Route::group(['middleware' => 'web'], function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

//User Routes
Route::get('/users', [App\Http\Controllers\UsuariosController::class, 'index'])->middleware('auth');
Route::get('/users/new', [App\Http\Controllers\UsuariosController::class, 'new'])->middleware('auth');
Route::post('/users/add', [App\Http\Controllers\UsuariosController::class, 'add'])->middleware('auth');
Route::get('/users/{id}/edit', [App\Http\Controllers\UsuariosController::class, 'edit'])->middleware('auth');
Route::post('/users/update/{id}', [App\Http\Controllers\UsuariosController::class, 'update'])->middleware('auth');
Route::delete('/users/delete/{id}', [App\Http\Controllers\UsuariosController::class, 'delete'])->middleware('auth');

//Products Routes
Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->middleware('auth');
Route::get('/products/new', [App\Http\Controllers\ProductController::class, 'new'])->middleware('auth');
Route::post('/products/add', [App\Http\Controllers\ProductController::class, 'add'])->middleware('auth');
Route::get('/products/{id}/edit', [App\Http\Controllers\ProductController::class, 'edit'])->middleware('auth');
Route::post('/products/update/{id}', [App\Http\Controllers\ProductController::class, 'update'])->middleware('auth');
Route::delete('/products/delete/{id}', [App\Http\Controllers\ProductController::class, 'delete'])->middleware('auth');

//Categories Routes
Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->middleware('auth');
Route::get('/categories/new', [App\Http\Controllers\CategoryController::class, 'new'])->middleware('auth');
Route::post('/categories/add', [App\Http\Controllers\CategoryController::class, 'add'])->middleware('auth');
Route::get('/categories/{id}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->middleware('auth');
Route::post('/categories/update/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->middleware('auth');
Route::delete('/categories/delete/{id}', [App\Http\Controllers\CategoryController::class, 'delete'])->middleware('auth');



