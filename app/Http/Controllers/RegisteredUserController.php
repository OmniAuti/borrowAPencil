<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    //
    public function create() {
        return view('auth.register');
    }

    public function store() {
        $validatedAttributes = request()->validate([
            'name' => ['required', 'min:3', 'max:50'],
            'email' => ['required', 'email', 'max:100', 'confirmed'],
            'password' => ['required', Password::min(5)->numbers(1)->symbols(1), 'confirmed'],
            'zipcode' => ['required', 'digits:5'],
            'role' => ['required'],
        ]);
        // Create user
        $user = User::create($validatedAttributes);
        // Login
        Auth::login($user);
        // Redirect
        return redirect('/dashboard');
    }
}
