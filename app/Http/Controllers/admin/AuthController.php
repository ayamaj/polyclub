<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
        public function dashboard()
        {
            Session::put('page', 'dashboard');
            return view('admin.dashboard');
        }

        public function loginview()
        {
            return view('admin.auth.login');
        }

        public function login(LoginRequest $request)
        {
            if (!Auth::guard('admin')->attempt($request->only('email', 'password'), $request->filled('remember')))
            {
                throw ValidationException::withMessages([
                    'invalid' => 'Invalid email or Password',
                ]);

            }
            return redirect()->route('dashboard');
        }

        public function logout(Request $request)
        {
            Auth::guard('admin')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route('admin.home');
        }
}
