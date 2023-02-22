<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderDetail extends Controller
{
    public function index(){
        return view('orderDitails.index');
    }
}
