<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "name" => "required|string",
            "email" => "required|string|email:dns|unique:users",
            "password" => ['required', 'confirmed', Rules\Password::defaults()],
            "token" => "required"
        ]);

        if ($request->token == 'S$wZcS9EOYor') {
            $validated['password'] = Hash::make($validated['password']);

            $user = User::create($validated);

            event(new Registered($user));

            Auth::login($user);

            return redirect(route('verification.notice'))->with('verif', 'verifikasi email telah dikirim');
        } else {
            return back()->withErrors('Invalid token');
        }
    }
}
