<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function orders()
    {
        $orders = DB::table('orders')->where('user_id',auth()->id())->get();
        // dd($orders);
        return view('orders.all-orders' , compact('orders'));
    }
   
    /** 
     * 
     * //add to fav table in order psges
     * 
     * 
    **/
    public function addFav($id)
    {
        $logged_in_user =Auth::user()->id;
        $fav =new Favorite();
        $fav->order_id = $id ;
        $fav->user_id = $logged_in_user ;
        $fav->save();
        return redirect()->back();
    }
      /** 
     * 
     * //delete from fav table in order psges
     * 
     * 
    **/
    public function deleteFav($id)
    {
    //    dd($id);
     DB::table('favorites')->where('order_id',$id)->delete();
     return redirect()->back();
    }
    /**
     * 
     * 
     * */
    public function myOrders()
    {
        return view('orders.my-orders');
    }
    public function order_details()
    {
        return view('orders.order_details');
    }
    public function create()
    {
        return view('orders.create');
    }
    public function reOrder()
    {
        return view('orders.reorder');
    }
    public function activeOrder()
    {
        return view('orders.active');
    }
    public function finishedOrder()
    {
        return view('orders.finished');
    }
}
