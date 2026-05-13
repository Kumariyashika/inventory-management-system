<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();
            $roleName = $user->role ? strtolower($user->role->roleName) : '';

            switch ($roleName) {
                case 'admin':
                    return redirect()->intended('/admin/dashboard');
                case 'manager':
                    return redirect()->intended('/manager/dashboard');
                case 'staff':
                    return redirect()->intended('/staff/dashboard');
                case 'purchase':
                    return redirect()->intended('/purchase/dashboard');
                case 'store':
                    return redirect()->intended('/store/dashboard');
                case 'supplier':
                    return redirect()->intended('/supplier/dashboard');
                case 'system':
                    return redirect()->intended('/system/dashboard');
                default:
                    return redirect('/');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
