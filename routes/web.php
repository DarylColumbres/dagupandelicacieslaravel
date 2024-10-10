<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdminController;

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

// Default Route
Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerpost'])->name('register');
Route::get('/', [AuthController::class, 'login'])->name('/');
Route::post('/login', [AuthController::class, 'loginpost'])->name('login');

// Home Route (Choose one method, index or indexx, not both)
Route::get('/home', [MenuController::class, 'index'])->name('home'); // Adjust as needed

// Admin Routes
Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
Route::post('/admin', [AdminController::class, 'adminpost'])->name('admin');

// Menu Routes
Route::get('/create', [MenuController::class, 'menu'])->name('create');
Route::post('/create', [MenuController::class, 'insertmenu'])->name('create');
Route::get('/dashboard', [MenuController::class, 'mainindex'])->name('dashboard');

// Editing Menu Items
Route::get('/edit/{id}', [MenuController::class, 'edit'])->name('edit');
Route::put('/edit/{id}', [MenuController::class, 'update'])->name('edit');

// Showing Menu Items
Route::get('/show/{id}', [MenuController::class, 'show'])->name('show');

// Deleting Menu Items
Route::delete('/deleteproduct', [MenuController::class, 'deleteProduct'])->name('deleteProduct');
Route::delete('/destroy/{id}', [MenuController::class, 'destroy'])->name('destroy');

// Additional Routes
Route::get('/about', [MenuController::class, 'about'])->name('about');
Route::get('/recipe/{id}', [MenuController::class, 'recipe'])->name('recipe');
Route::get('/tuts/{id}', [MenuController::class, 'tuts'])->name('tuts');
