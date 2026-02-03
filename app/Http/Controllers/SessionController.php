<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException as ValidationValidationException;
use League\Config\Exception\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(!Auth::attempt($attributes)){
            throw ValidationValidationException::withMessages([
            'email' => 'Your provided credentials could not be verified.'
        ]);
        }

        request()->session()->regenerate();

        return redirect('/jobs');

    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}
