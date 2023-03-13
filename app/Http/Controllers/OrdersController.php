<?php

namespace App\Http\Controllers;

use App\Models\AdditionalService;
use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\Favorite;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    public function orders(Request $request)
    {
        $orders = Order::all();
        $cat = DB::table('categories')
            ->whereNull('parent_id')->get();
        $countries = Country::all();
        $serv = AdditionalService::all();

        return view('orders.all-orders', compact('orders', 'cat', 'countries', 'serv'));
    }
    public function fetchCat($id)
    {
        $data['sub_cat'] = Category::where("parent_id", $id)->get(["name", "id"]);
        // dd(\Response::json($data));
        return \Response::json($data);
    }

    public function sortAsc()
    {
        $sort = Order::orderBy('created_at', 'ASC')->get();
        // var_dump($sort);
        return \Response::json($sort);
    }
    public function sortDesc()
    {
        $sort = Order::orderBy('created_at', 'DESC')->get();
        // var_dump($sort);
        return \Response::json($sort);
    }
    public function filterCat($id)
    {
        $orders_cat = DB::table('categories')
            ->select('orders.*', 'categories.*')
            ->Join('orders', 'orders.category_id', '=', 'categories.id')
            ->where('categories.parent_id', $id)
            ->get();
        return \Response::json($orders_cat);
    }
    public function filterSub($id)
    {
        // $orders_sub = Order::where("category_id", $id)->get();
        $orders_sub = DB::table('orders')
            ->select('orders.*', 'categories.*')
            ->join('categories', 'categories.id', '=', 'orders.category_id')
            ->where('categories.id', $id)
            ->get();
        // dd($orders_sub);
        return \Response::json($orders_sub);
    }
    /**
     *
     * //add to fav table in order psges
     *
     *
     **/
    public function addFav($id)
    {
        $logged_in_user = Auth::user()->id;
        $fav = new Favorite();
        $fav->order_id = $id;
        $fav->user_id = $logged_in_user;
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
        DB::table('favorites')->where('order_id', $id)->delete();
        return redirect()->back();
    }
    /**
     *
     *
     * */
    public function myOrders()
    {
        // $myOrders = DB::table('orders')->where('user_id',auth()->id())->get();
        return view('orders.my-orders');
    }
    public function orderDetails()
    {
        return view('orders.order_details');
    }
    public function create()
    {
        $countries = Country::all();
        $cities = City::all();
        $categories = Category::all();
        return view('orders.create', compact('countries', 'categories', 'cities'));
    }
    public function store(Request $request)
    {
        // dd($request);

        $request->validate([
            'title' => 'required',
            'country' => 'required',
            'min_price' => 'required',
            'img' => 'nullable|mimes:jpeg,png,jpg,gif',
        ]);
        // dd($request);
        $order = new Order();
        $order->title = $request->title;
        $order->description = $request->description;
        $order->city_id = $request->city;
        $order->country_id = $request->country;
        $order->min_price = $request->min_price;
        $order->max_price = $request->max_price;
        $order->status = 0;
        $order->user_id = auth()->user()->id;
        $order->category_id = $request->category_id;
        $order->save();
        return redirect()->route('orders.view')->with('message', 'success save');
    }
    // public function getCities($id){
    //     return City::where('country_id',$id)->get();
    // }
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
