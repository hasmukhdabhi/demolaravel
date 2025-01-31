<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use PHPUnit\Framework\Constraint\Count;
use App\Livewire\Counter;
use App\Livewire\Searchbox;

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

// Route::get('/user', [UserController::class, 'index']);

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



// Example routes
Route::get('post/{id?}/comment/{commentid?}', function (string $id = null, string $comment = null) {
    if ($id) {
        return "<h1>Post ID : " . $id . "</h1><h2> Comment ID : " . $comment . "</h2>";
    } else {
        return "<h1>No ID Found</h1>";
    }
});

// register a route for the component


Route::get('/counter', Counter::class);

// Route::get('/searchbox', Searchbox::class);
Route::get('/searchbox', function () {
    return view('livewire.searchbox');
});

Route::view('search', 'usersearch');