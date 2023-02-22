<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }
    public function edit()
    {
        return view('profile.edit');
    }
    public function changePassword()
    {
        return view('profile.change_password');
    }
}