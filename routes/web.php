<?php

use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use Symfony\Component\HttpFoundation\Session\Session;

// Home Route
Route::view('/', 'home');
// Contact Route
Route::view('/contact', 'contact');



// Jobs Routes
Route::resource('jobs', JobController::class);
/* Route::controller(JobController::class)->group(function () {
    Route::get('/jobs','index');
    Route::get('/jobs/create', 'create');
    Route::get('/jobs/{job}', 'show');
    Route::post('/jobs', 'store');
    Route::get('/jobs/{job}/edit', 'edit');
    Route::patch('/jobs/{job}', 'update');
    Route::delete('/jobs/{job}', 'destroy');
}); */

//Authenticated Jobs Routes
Route::get('register', [RegisterUserController::class, 'create']);
Route::post('register', [RegisterUserController::class, 'store']);

Route::get('/login',[SessionController::class,'create']);
Route::post('/login',[SessionController::class,'store']);



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
