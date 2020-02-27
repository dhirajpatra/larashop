<?php

namespace App\Http\Controllers;

use App\Product;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $product = Product::find($request->id);

        Cart::add($product->id, $product->name, $product->price, 1, array());

        return back()->with('success', "$product->name has successfully beed added to the shopping cart!");
    }

    public function cart()
    {
        $params = [
            'title' => 'Shopping Cart Checkout',
        ];

        return view('cart')->with($params);
    }

    public function clear()
    {
        Cart::clear();

        return back()->with('success', "The shopping cart has successfully beed added to the shopping cart!");
    }
}