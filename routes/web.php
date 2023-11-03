<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GetUserController;
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

Route::get('/', [GetUserController::class,'searchData'])->name('/');
Route::any('/get-api-data',[GetUserController::class,'getUsers'])->name('get.data');