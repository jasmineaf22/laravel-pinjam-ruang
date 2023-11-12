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



Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
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
});




Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/newRegister', [AuthController::class, 'newRegister'])->name('newRegister');
Route::post('/newLogin', [AuthController::class, 'newLogin'])->name('newLogin');
