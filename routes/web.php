<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function (){

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.login');
    Route::get('/add-product', [ProductController::class, 'add'])->name('product.add');
    Route::post('/create-product', [ProductController::class, 'create'])->name('product.create');
    Route::get('/manage-product', [ProductController::class, 'manage'])->name('product.manage');

});
