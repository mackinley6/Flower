<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class AddProductController extends Controller
{
    public function index()
    {
      return view('addProduct');
    }

    public function store(Request $request)
    {
      $this->validate($request, [
        'product_name' =>'required|max:255',
        'product_description' =>'required|max:255',
        'price' =>'required|max:11',
        'quantity' =>'required|max:11'

      ]);

     Product::create([
        'product_name' => $request->product_name,
        'product_description' => $request->product_description,
        'quantity' => $request->quantity,
        'price' => $request->price,
     ]);
     return redirect()->route('addProduct');
    
    }
}
