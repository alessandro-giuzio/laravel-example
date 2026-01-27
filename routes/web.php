<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\ContactController;


// Home Route
Route::get('/', function () {
    return view('home');
});


// Jobs Routes
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->paginate(6);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

// Create Job Route
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// Show Job Route
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('jobs.show', ['job' => $job]);
});




// Contact Route
Route::get('/contact', [ContactController::class, 'index']);


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
