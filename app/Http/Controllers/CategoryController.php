<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\User;

class CategoryController extends Controller
{
    public function show($category) {
        $items = Category::where('category', $category)->get();

        return view('category', compact('items', 'category'));
    }

    public function search(Request $request) {
        $search = $request->search;

        $query = Category::select('name', 'image_path', 'price');
        $query->where('name', 'LIKE', $search);

        $items = $query->get();

        return view('category', compact('items'));
    }
}