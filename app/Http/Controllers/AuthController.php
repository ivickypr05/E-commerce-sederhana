<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth/login');
    }

    public function login(Request $request)
    {
        Session::flash('email', $request->email);

        $request->validate([
            'email' => 'required|email:dns,rfc',
            'password' => 'required'
        ]);

        $check = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($check)) {
            $request->session()->regenerate();

            return redirect()->intended('/')->with('success', 'Success Login');
        }
        return back()->withErrors([
            'email' => 'Email and Password Invalid',
        ]);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect('login')->with('success', 'Success logout');
    }

    public function register()
    {
        return view("auth/register");
    }

    public function doregister(Request $request)
    {
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);

        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect('login')->with('success', 'Success Registration');
    }
}
