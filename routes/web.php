<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
Route::get('/', function () {
    return view('welcome');
});

ROute::view('/admin-login', 'admin-login');

Route::post('/admin-login', [AdminController::class, 'login']);