<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Collection;

class CollectionController extends Controller
{
    public function index()
    {
        $collections = Collection::orderBy('name', 'asc')->paginate(12);
        $products = Product::latest()->paginate(12);
        return view('collection.index', ['collections' => $collections, 'products' => $products]);
    }

    public function show()
    {
        return view('collection.index', compact('collection'));
    }
}