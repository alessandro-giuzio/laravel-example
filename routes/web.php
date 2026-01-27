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
    $jobs = Job::with('employer')->latest()->paginate(6);

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

// Store Job Route
Route::post('/jobs',function (){

        request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

        Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1,
        'description' => request('description'),
    ]);

    return redirect('/jobs');
});

//Edit Job Route
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);

    return view('jobs.edit', ['job' => $job]);
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
