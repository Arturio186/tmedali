<?php

namespace App\Http\Controllers;

use App\Models\Product;

class CatalogController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('sort')->get();

        return view('pages.catalog', compact('products'));
    }
}