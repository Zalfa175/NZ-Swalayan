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

Route::get('/login', function (){
    return view('login');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/transaction', [TransactionController::class, 'index']);
Route::get('/transaction/add', [TransactionController::class, 'create']);

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/add', [UserController::class, 'create']);

Route::get('/customer', [CustomerController::class, 'index']);
Route::get('/customer/add', [CustomerController::class, 'create']);
Route::post('/customer', [CustomerController::class, 'store']);
Route::get('/customer/{customer}', [CustomerController::class, 'show']);
Route::put('/customer/{customer}', [CustomerController::class, 'update']);
Route::delete('/customer/{customer}', [CustomerController::class, 'destroy']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/add', [CategoryController::class, 'create']);
Route::post('/categories', [CategoryController::class, 'store']);
Route::get('/categories/{category}', [CategoryController::class, 'show']);
Route::put('/categories/{category}', [CategoryController::class, 'update']);
Route::delete('/categories/{category}', [CategoryController::class, 'destroy']);

Route::get('/stuffs', [StuffController::class, 'index']);
Route::get('/stuffs/add', [StuffController::class, 'create']);
Route::post('/stuffs', [StuffController::class, 'store']);
Route::get('/stuffs/{stuff}', [StuffController::class, 'show']);
Route::put('/stuffs/{stuff}', [StuffController::class, 'update']);
Route::delete('/stuffs/{stuff}', [StuffController::class, 'destroy']);

