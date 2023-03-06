<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryOrder;
use Illuminate\Http\Request;
use App\Http\Requests\MyCategoryOrderRequest;

class MyCategoryOrderController extends Controller
{
    //
    public function create(){
        return view('admin.mycategoryOrder.index');
    }
    public function store(MyCategoryOrderRequest $request){

    $validatedData = $request->validated();
    $file = $request->file('image');
    $ext = $file->getClientOriginalExtension();
    $filename = time().'.'.$ext;
    $file->move('uploads/myCategoryOrder/',$filename);
    $validatedData['image']="uploads/myCategoryOrder/$filename";
    CategoryOrder::create(['image' => $validatedData['image'],'name' => $validatedData['name']]);
    return redirect('admin/categoryOrder')->with('message','category added Successfuly');

    }
}
