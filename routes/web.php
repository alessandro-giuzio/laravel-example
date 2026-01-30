<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;


// Home Route
Route::view('/', 'home');

// Jobs Routes
Route::controller(JobController::class)->group(function () {
    Route::get('/jobs','index');
    Route::get('/jobs/create', 'create');
    Route::get('/jobs/{job}', 'show');
    Route::post('/jobs', 'store');
    Route::get('/jobs/{job}/edit', 'edit');
    Route::patch('/jobs/{job}', 'update');
    Route::delete('/jobs/{job}', 'destroy');


});

Route::resource('jobs', JobController::class);

// Contact Route
Route::view('/contact', 'contact');


// Music Route
Route::get('/musics', function () {
    return view('musics', [
        'songs' => \App\Models\Music::all()
    ]);
});

// Show Music Route
Route::get('/music/{id}', function ($id) {
    $song = \App\Models\Music::find($id);

    return view('music', ['song' => $song]);
});
