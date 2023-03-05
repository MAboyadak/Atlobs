<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\About;

class AboutController extends Controller
{
    public function index()
    {
        return view('aboutus.index');
    }

   
    public function create()
    {
        return view('staticPages.about');
    }
    public function store(About $request)
    {
        $validatedData = $request->validated();
        // dd($validatedData);
        return view('aboutus.index' , compact('validatedData'));
    }
}
