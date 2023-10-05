<?php

use App\Http\Controllers\User\AuthController;
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
    return view('welcome');
});

# Signup
Route::get('auth/registration', [AuthController::class, 'registration'])->name('auth.registration');
Route::post('auth/signup', [AuthController::class, 'signup'])->name('auth.signup');

# Login
Route::get('auth/index', [AuthController::class, 'index'])->name('auth.index');
Route::post('auth/login', [AuthController::class, 'login'])->name('auth.login');
