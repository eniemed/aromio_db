<?php

namespace App\Http\Controllers;

use App\Models\products;

class ProductsController extends Controller
{
    public function index()
    {
        $products = products::all();

        return response()->json($products);
    }
}
