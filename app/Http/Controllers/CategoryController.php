<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\User;

class CategoryController extends Controller
{
    public function search(Request $request) {
        $search = $request->search;

        $query = Category::select('name', 'image_path', 'price');
        $query->where('name', 'LIKE', $search);

        $items = $query->get();

        return view('category.food', compact('items'));
    }

    public function food()
    {
        $items = Category::all()->where('category', 'food');

        return view('category.food', compact('items'));
    }

    public function electronic()
    {
        $items = Category::all()->where('category', 'electronic');

        return view('category.electronic', compact('items'));
    }

    public function literature()
    {
        $items = Category::all()->where('category', 'literature');

        return view('category.literature', compact('items'));
    }

    public function tool()
    {
        $items = Category::all()->where('category', 'tool');

        return view('category.tool', compact('items'));
    }

    public function furniture()
    {
        $items = Category::all()->where('category', 'furniture');

        return view('category.furniture', compact('items'));
    }

    public function beautyProduct()
    {
        $items = Category::all()->where('category', 'beauty-product');

        return view('category.beauty-product', compact('items'));
    }

    public function healthProduct()
    {
        $items = Category::all()->where('category', 'health-product');

        return view('category.health-product', compact('items'));
    }

    public function household()
    {
        $items = Category::all()->where('category', 'household');

        return view('category.household', compact('items'));
    }
}