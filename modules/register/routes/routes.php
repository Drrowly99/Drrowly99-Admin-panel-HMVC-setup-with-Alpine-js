<?php

use Illuminate\Support\Facades\Route;
use Modules\Auth\Register\Controllers\RegisterController;

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
    return view('register::register', ['title' => 'Registeration Form']);
});
Route::post('submit', [RegisterController::class, 'submit']);
