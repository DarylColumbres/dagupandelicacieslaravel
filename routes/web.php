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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register',[AuthController::class,'registerpost'])->name('register');
Route::get('/',[AuthController::class,'login'])->name('/');
Route::post('/login',[AuthController::class,'loginpost'])->name('login');

<<<<<<< HEAD

Route::get('/home',[MenuController::class,'index'])->name('home');
Route::get('/home',[MenuController::class,'indexx'])->name('home');

Route::post('/login', [AuthController::class, 'loginpost'])->name('login');
=======
Route::get('/admin',[AdminController::class,'admin'])->name('admin');
Route::post('/admin',[AdminController::class,'adminpost'])->name('admin');

Route::get('/home',[MenuController::class,'index'])->name('home');
Route::get('/home',[MenuController::class,'indexx'])->name('home');
>>>>>>> e28d8d047f8a90b1879ea904ca889f5a8e87ed55

Route::get('/create',[MenuController::class,'menu'])->name('create');
Route::post('/create',[MenuController::class,'insertmenu'])->name('create');
Route::get('/dashboard',[MenuController::class,'mainindex'])->name('dashboard');


Route::get('/edit{id}',[MenuController::class,'edit'])->name('edit');
Route::put('/edit{id}',[MenuController::class,'update'])->name('edit');


Route::get('/show{id}',[MenuController::class,'show'])->name('show');

Route::delete('/deleteproduct', [MenuController::class, 'deleteProduct'])->name('deleteProduct');
Route::delete('/destroy{id}',[MenuController::class,'destroy'])->name('destroy');

Route::get('/about',[MenuController::class,'about'])->name('about');

Route::get('/recipe{id}',[MenuController::class,'recipe'])->name('recipe');
Route::get('/tuts{id}',[MenuController::class,'tuts'])->name('tuts');
