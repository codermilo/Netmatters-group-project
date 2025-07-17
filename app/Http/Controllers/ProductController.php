<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Collection;

class ProductController extends Controller
{
    public function index()
    {
        $collections = Collection::orderBy('name', 'asc')->paginate(12);
        $products = Product::latest()->paginate(12);
        return view('product.index', ['collections' => $collections, 'products' => $products]);
    }

    public function show(Product $product)
    {
        return view('products.index', compact('product'));
    }
}