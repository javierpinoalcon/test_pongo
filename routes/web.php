<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [UserController::class,'index']);

Route::get('/create', function () {
    return view('/users/create');
});

Route::get('/user/{id}', function($id){
	return view('/users/show');
});

Route::get('/edit', function () {
    return view('/users/edit');
});

Route::get('/usercount', [UserController::class, 'count']);
