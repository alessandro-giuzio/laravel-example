<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\ContactController;
use App\Models\Contact;

Route::get('/', function () {
    return view('home');
});

Route::get('/music', function () {
    return view('music', [
        'songs' => \App\Models\Music::all()
    ]);
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('job', ['job' => $job]);
});

Route::get('/contact', [ContactController::class, 'index']);
