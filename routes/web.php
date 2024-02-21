<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StuffController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DetailController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/transaction', [TransactionController::class, 'index']);
Route::get('/transaction/add', [TransactionController::class, 'create']);

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/add', [UserController::class, 'create']);

Route::get('/customer', [CustomerController::class, 'index']);
Route::get('/customer/add', [CustomerController::class, 'create']);

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/add', [CategoryController::class, 'create']);

Route::get('/stuff', [StuffController::class, 'index']);
Route::get('/stuff/add', [StuffController::class, 'create']);

