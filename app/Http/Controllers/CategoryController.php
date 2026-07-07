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
}