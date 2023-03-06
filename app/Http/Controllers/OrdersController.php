<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function orders()
    {
        return view('orders.all-orders');
    }
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
