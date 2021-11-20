<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\ProductController;

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
//Homepage
Route::get('/', [ProductController::class, 'index']);

//Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

//Logout
Route::post('/logout', [LoginController::class, 'logout']);

//Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

//Product
Route::resource('/dashboard/product', DashboardProductController::class)->middleware('auth');

//Product Category
Route::resource('/dashboard/category', DashboardCategoryController::class);//->middleware('auth');