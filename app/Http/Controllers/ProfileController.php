<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;



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
    public function createPassword()
    {
        return view('profile.change_password');
    }
    public function changePassword(Request $request){
    $request->validate([
     'current_password' =>['required','string','min:8'],
     'password'=>['required','string','min:8','confirmed']
    ]);
    $currentPasswordStatus = Hash::check($request->current_password,auth()->user()->password);
    if($currentPasswordStatus){
        User::findOrFail(Auth::user()->id)->update([
         'password'=> Hash::make($request->password),
        ]);
        return redirect()->back()->with('message','password Updated Sucessfully');
    }else{
        return redirect()->back()->with('message','current password does not match with old password');

    }
    }
}
