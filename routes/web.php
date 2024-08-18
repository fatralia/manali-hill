<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\typeController;
use App\Http\Controllers\newsController;

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
    return view('index');
});

Route::get('/type', [typeController::class, 'index']);
Route::get('/news', [newsController::class, 'index']);