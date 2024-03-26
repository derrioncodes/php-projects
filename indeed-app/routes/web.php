<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;




Route::get('/', function () {
    return view('auth/login');
});

Route::get('/register', function () {
    return view('pages/create-account');
});



// AUTHORIZED PAGES
Route::redirect('/dashboard', '/jobs') ->name('dashboard');

Route::group([
    'middleware' => ['auth', 'verified'],
    'prefix' => 'jobs'
],(function () {

    Route::get('/', [JobController::class, 'index']);

    Route::get('/create', [JobController::class, 'create']);

    Route::post('/', [JobController::class, 'store']);

    Route::get('/{id}', [JobController::class, 'show']);

    Route::get('/{id}/edit', [JobController::class, 'edit']);

    Route::put('/{id}', [JobController::class, 'update']);

    Route::delete('/{id}', [JobController::class, 'destroy']);
   
}));

require __DIR__.'/auth.php';
