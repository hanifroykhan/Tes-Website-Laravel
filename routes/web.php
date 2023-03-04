<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\SwapController;
use App\Http\Controllers\ConvertController;
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
    return view('auth.login');
});

Auth::routes();

// Users
Route::get('/index', [UserController::class, 'index'])->name('index');
Route::get('/create', [UserController::class, 'create'])->name('createUser');
Route::post('/store', [UserController::class, 'store'])->name('postUser');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('editUser');
Route::put('/user/{id}/update', [UserController::class, 'update'])->name('updateUser');
Route::delete('/user/{id}/delete', [UserController::class, 'destroy'])->name('deleteUser');

// Product
Route::get('/products',  [ProductController::class, 'index'])->name('products');

// API
Route::get('/apiUsers',  [ApiController::class, 'index'])->name('apiUsers');

// Function
Route::get('/indexSwap',  [SwapController::class, 'index'])->name('indexSwap');
Route::get('/indexConvert', [ConvertController::class, 'index'])->name("indexConvert");
Route::post('/convertNumber', [ConvertController::class, 'wordsConverts'])->name('convert');

