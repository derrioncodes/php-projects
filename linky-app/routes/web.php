<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkController;

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

Route::get('/', [LinkController::class, 'index']);
Route::post('/', [LinkController::class, 'store']);
Route::get('/show/{short_url}', [LinkController::class, 'show']);
Route::get('/{short_url}', [LinkController::class, 'redirect']);


