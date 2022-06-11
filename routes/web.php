<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/register/create', [UserController::class, 'create'])->name('create');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
Route::get('/user/details/{id}', [UserController::class, 'show'])->name('user');
Route::get('/dashboardCustomer', function () {
    return view('dashboardCustomer');
})->name('customer-view');

Route::post('/check', [UserController::class, 'authorized_user']);
Route::post('/register', [UserController::class, 'store']);

Route::get('/users', [UserController::class, 'show_all_users']);
