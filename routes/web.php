<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
});

Route::get('/musics', function () {
    return view('musics', [
        'songs' => \App\Models\Music::all()
    ]);
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->paginate(6);

    return view('jobs', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('job', ['job' => $job]);
});

Route::get('/contact', [ContactController::class, 'index']);
