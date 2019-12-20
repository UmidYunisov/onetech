<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ShopController extends Controller
{
    public function index()
    {
    	$products = Product::where('is_active',1)->paginate(10);
    	return view('pages.shop', compact('products'));
    }
}
