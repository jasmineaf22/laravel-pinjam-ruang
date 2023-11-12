<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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
    return view('dashboard');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/register', function(){
    return view('register');
});

Route::get('/alur', function(){
    return view('alur');
});

Route::get('/form', function(){
    return view('form');
});

Route::get('/ruangan', function(){
    return view('ruangan');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/newRegister', [AuthController::class, 'newRegister'])->name('newRegister');
Route::post('/newLogin', [AuthController::class, 'newLogin'])->name('newLogin');
