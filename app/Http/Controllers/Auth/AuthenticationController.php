<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthenticationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{

    public function login()
    {
        return view('pages.auth.login');
    }

    public function authenticate(AuthenticationRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
