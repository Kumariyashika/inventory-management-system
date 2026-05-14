<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        Log::info('Login attempt:', $credentials);

        if (Auth::attempt($credentials)) {

            Log::info('Login success');

            $request->session()->regenerate();

            $user = Auth::user();

            Log::info('User:', ['user' => $user]);

            // SAFE ROLE CHECK
            if (!$user->role) {
                Auth::logout();
                return redirect('/login')->withErrors([
                    'role' => 'No role assigned to this user.'
                ]);
            }

            $role = strtolower($user->role->roleName);

            Log::info('Role:', ['role' => $role]);

            return match ($role) {

                'admin' => redirect()->intended('/admin/dashboard'),

                'manager' => redirect()->intended('/manager/dashboard'),

                'staff' => redirect()->intended('/staff/dashboard'),

                'purchase' => redirect()->intended('/purchase/dashboard'),

                'store' => redirect()->intended('/store/dashboard'),

                'supplier' => redirect()->intended('/supplier/dashboard'),

                default => redirect()->intended('/'),
            };
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}