<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Product;
use Illuminate\Http\Request;


class AddProductController extends Controller
{
    public function index()
    {
      return view('orders');
    }
    public function show()
    {
        $orders = DB::table('orders')->leftJoin('products','orders.product_id','=','products.id')->get();
        return view('/orders', compact('orders'));
    }
}