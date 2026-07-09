<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class SearchController extends Controller
{
    public function search() {

    $categories = Category::all();
     return view('search', compact('categories'));
    }
}
