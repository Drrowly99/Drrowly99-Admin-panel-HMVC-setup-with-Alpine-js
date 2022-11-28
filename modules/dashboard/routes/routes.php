<?php

use Illuminate\Support\Facades\Route;
use Modules\Dashboard\Controllers\DashboardController;
use Modules\Dashboard\Middleware\AuthCheck;

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

Route::get('/', [DashboardController::class, 'index'])->middleware(AuthCheck::class)->name('dashboard');
Route::get('/logout', [DashboardController::class, 'logout']);
Route::get('/{menu}', [DashboardController::class, 'dashboard'])->middleware(AuthCheck::class);
Route::get('/{menu}/{sub}', [DashboardController::class, 'dashboard_all'])->middleware(AuthCheck::class);
