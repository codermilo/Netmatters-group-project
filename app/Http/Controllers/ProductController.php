<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;  // Don't forget to import your Product model

class ProductController extends Controller
{
    public function index()
    {
        // Get all products (or you could paginate or limit)
        $products = Product::all();

        // Pass products to the view
        return view('admin.products', compact('products'));
    }
}
