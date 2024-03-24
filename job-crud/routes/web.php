<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JobController;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/create-account', function () {
    return view('pages/create-account');
});

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


// AUTHENTICATED PAGES

// Route::redirect('/dashboard', '/jobs') ->name('dashboard');

// Route::get('/jobs', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified']);

// Route::get('/jobs/create', function () {
//     return view('pages/add-job');
// })->middleware(['auth', 'verified']);

// post request to save job
// Route::post('/jobs', function () {
//     return view('pages/add-job');
// })->middleware(['auth', 'verified']);
// 

// get specific job to edit
// Route::get('/jobs/{id}', function () {
//     return view('pages/edit-job');
// })->middleware(['auth', 'verified']);

// edit route
// Route::get('/jobs/{id}/edit', function () {
//     return view('pages/edit-job');
// })->middleware(['auth', 'verified']);
// 

// update route when we edit
// Route::put('/jobs/{id}', function () {
//     return view('pages/edit-job');
// })->middleware(['auth', 'verified']);
// 

// delete job
// Route::delete('/jobs/{id}', function () {
//     return view('pages/edit-job');
// })->middleware(['auth', 'verified']);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
