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
        
        if ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
        }

        $sortKey = $request->query('sort', 'price_asc');

        switch ($sortKey) {
            case 'price_asc':
                $query->orderByRaw('CAST(price AS DECIMAL(10,2)) ASC');
                break;
            case 'price_desc':
                $query->orderByRaw('CAST(price AS DECIMAL(10,2)) DESC');
                break;
            case 'name_desc':
                $query->orderBy('name', 'desc');
                break;
            case 'name_asc':
            default:
                $query->orderBy('name', 'asc');
                break;
        }

        $items = $query->get();

        return view('category', compact('items'));
    }
}
