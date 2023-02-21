<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsAndConditions extends Controller
{
    public function index()
    {
        return view('terms.index');
    }
}
