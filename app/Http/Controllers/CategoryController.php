<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Product;

class CategoryController extends Controller
{
    public function view_category($id)
    {
        $category = Category::where('id', $id)->firstOrFail();
        $products = $category->products()->paginate(10);
        return view('pages.view_category', compact('products','category'));
    }

}
