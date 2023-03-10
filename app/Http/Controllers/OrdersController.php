<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    public function orders()
    {
        // $cat = Category::all();
        $cat = DB::table('categories')
            ->whereNull('parent_id')->get();
        return view('orders.all-orders', ['cat' => $cat]);
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
    public function admin()
    {
        $category = Category::all();
        return view('admin.orders.index', ['category' => $category]);
    }
}