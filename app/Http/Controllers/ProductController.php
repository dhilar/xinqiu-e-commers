<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }


    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product.show', compact('product'));
    }

    public function search(Request $request)
    {
    $query = $request->input('query');

    $products = Product::where('name', 'LIKE', "%{$query}%")
                       ->orWhere('price', $query)  // Pencarian berdasarkan harga
                       ->get();

    return view('product.index', compact('products'));
    }

}
