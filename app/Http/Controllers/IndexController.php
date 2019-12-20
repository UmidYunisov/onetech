<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Image;

class IndexController extends Controller
{
    public function index()
    {
    	$bests = Product::where('is_best',1)->where('is_active',1)->get();
        $hot_deals = Product::where('hot_deals',1)->where('is_active',1)->get();
        $is_new = Product::where('is_new',1)->where('is_active',1)->take(9)->get();
    	return view('pages.index', compact('bests','hot_deals','is_new'));
    }

    public function quickview($id)
    {
    	$product = Product::findOrFail($id);
	    $response = $product;
	    $response['images'] = $product->images;
	    return response()->json($response);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contacts()
    {
        return view('pages.contacts');
    }
}
