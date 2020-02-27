<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;

class HomeController extends Controller
{
    public function index()
    {
        $params = [
            'title' => 'Larashop',
            'sub_title' => 'All Products Listing',
            'products' => Product::all(),
        ];

        return view('layouts.index')->with($params);
    }

    public function brands($url)
    {
        $brand = Brand::whereUrl($url)->first();

        $params = [
            'title' => $brand->title,
            'sub_title' => "Products by $brand->title",
            'products' => $brand->products,
        ];

        return view('layouts.index')->with($params);
    }

    public function categories($url)
    {
        $category = Category::whereUrl($url)->first();

        $params = [
            'title' => $category->title,
            'sub_title' => "Products in $category->title category",
            'products' => $category->products,
        ];

        return view('layouts.index')->with($params);
    }

    public function product($id)
    {
        $product = Product::whereId($id)->first();

        $params = [
            'title' => 'Product Details',
            'sub_title' => 'Product ID: ' . $product->id,
            'id' => $product->id,
            'name' => $product->name,
            'description' => $product->description,
            'price' => $product->price,
            'image' => $product->getImage(),
        ];

        return view('layouts.product')->with($params);
    }
}