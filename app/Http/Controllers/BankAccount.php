<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BankAccount extends Controller
{
    public function index()
    {
        return view('bankAcount.index');
    }
}
