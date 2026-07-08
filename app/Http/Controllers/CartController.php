<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CartController extends Controller
{
    public function cart() {
        // dummy values
        $cartItems = Category::select('id', 'name', 'image_path', 'price', 'category')->get();

        foreach ($cartItems as $item) {
            $item->quantity = rand(1, 10);
        }

        // calculate totals
        $subtotal = 0;
        
        foreach ($cartItems as $item) {
            $subtotal += $item->price * $item->quantity;
        }

        $totalProducts = $cartItems->count();
        $shipping = 15;
        $tax = $subtotal * 0.10;
        $total = $subtotal + $shipping + $tax;

        return view('cart', compact(
            'cartItems',
            'totalProducts',
            'subtotal',
            'shipping',
            'tax',
            'total'
        ));
    }
}
