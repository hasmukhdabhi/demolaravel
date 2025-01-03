<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;

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
// Route::get('/crud', [PageController::class, 'crud']);

// crud routes
// Route::resource('items', ItemController::class);

// index route 
Route::get('/items', [ItemController::class, 'index'])->name('items.index');

// create route
Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');

// store route
Route::post('/items', [ItemController::class, 'store'])->name('items.store');

// edit route
Route::get('/items/{id}/edit', [ItemController::class, 'edit'])->name('items.edit');

// update route
Route::put('/items/{id}', [ItemController::class, 'update'])->name('items.update');

// delete route
Route::delete('/items/{id}', [ItemController::class, 'destroy'])->name('items.destroy');
