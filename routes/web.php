<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MenuManagement;

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
// Frontend
Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});

// Backend
Route::get('/admin/dashboard', [AdminController::class, 'index']);

Route::get('/admin/login', [AdminController::class, 'login']);

Route::get('/admin/forgot', [AdminController::class, 'forgot']);

// menu management
Route::get('/admin/add_horizontal_menu', [MenuManagement::class, 'add_horizontal_menu']);

Route::get('/admin/add_vertical_menu', [MenuManagement::class, 'add_vertical_menu']);




