<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
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
}
