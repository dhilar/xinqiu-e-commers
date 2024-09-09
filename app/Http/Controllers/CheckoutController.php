<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function addToCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $quantity = $request->input('quantity', 1);
        $totalPrice = $quantity * $product->price;

        Order::create([
            'product_id' => $product->id,
            'quantity' => $quantity,
            'total_price' => $totalPrice,
        ]);

        return redirect()->route('checkout.index')->with('success', 'Pembayaran berhasil! Terima kasih telah berbelanja.');

    }

    public function checkout()
    {
        $orders = Order::all();
        return view('checkout.index', compact('orders'));
    }
}
