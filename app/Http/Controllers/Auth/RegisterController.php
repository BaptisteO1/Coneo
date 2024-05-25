<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
   
    
    public function showRegistrationForm() 
    {
        return view('auth.register');
    }

    public function register(Request $request) {
        $validated = $request->validate([
            'firstname' => ['required', 'string', 'between:3,255'],
            'surname' => ['required', 'string', 'between:2,255'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);

        Auth::login($user);

        return redirect()->route('dashboard')->withStatus('Inscription réussie !');
    }
}
