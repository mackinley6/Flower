<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AllProductsController extends Controller
{
   public function show()
    {
        $products = DB::table('products')->select('select * from products')->get();
        return view('/')->with('products', $products );
    }

}
