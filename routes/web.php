<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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

Route::get('Home', function () {
    return view('Home');
});


Route::get('Inscription', function () {
    return view('Inscription');
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('Crud', function () {
    return view('CRUD');
});


Route::get('Crud', [userController::class,'printUser']);

Route::post('userAdd', [userController::class,'addUser']);
