<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', function () {
    return view('home');
});

// Page route
// Route::get('/about', function () {
//     return view('about');
// });
// Controller routes go here ... Basic routes

// Route::get('/user', [App\Http\Controllers\UserController::class, 'index']);

Route::get('/user', [UserController::class, 'index']);

// Resource routes go here
Route::resource('products', ProductsController::class);

Route::get('/about', [PageController::class, 'about']);
Route::get('/services', [PageController::class, 'services']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/', [HomeController::class, 'index']);
