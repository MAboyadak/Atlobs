<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function login()
    {
        return view('admin.Auth.login');
    }

    public function adminLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:8|max:25',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('dashboard.home')
            ->withSuccess('Signed in');
        }

        return redirect("admin/login")->withErrors('Login details are not valid');
    }

    public function signOut()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('dashboard.login');
    }
}
