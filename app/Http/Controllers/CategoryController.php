<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\User;

class CategoryController extends Controller
{
    public function index()
    {
        $items = Category::select('name', 'image_path', 'price')->get();
                
        return view('category.food', compact('items'));
    }

    public function search(Request $request) {
        $search = $request->search;

        $query = Category::select('name', 'image_path', 'price');
        $query->where('name', 'LIKE', $search);

        $items = $query->get();

        return view('category.food', compact('items'));
    }
}