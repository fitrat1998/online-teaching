<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;


Route::get('/', [CommonController::class ,'index'])->name('index');

Route::resources([
	'news' => NewsController::class,
	'services' => ServiceController::class,
	'first' => FirstController::class,
	'login' => LoginController::class,
	'user' => userController::class,
]);
