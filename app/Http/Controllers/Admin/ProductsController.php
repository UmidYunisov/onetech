<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Image;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('cat_title', 'id')->all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' =>'required',
            'text'   =>  'required',
            'price'  =>  'required|integer',
            'color' => 'nullable|string',
            'discount' => 'nullable|integer',
            'images.*' =>  'nullable|image'
        ]);
        $product = Product::add($request->all());
        $product->uploadImage($request->file('images'));
        $product->setCategory($request->get('category_id'));
        $product->toggle_hot_deals($request->get('hot_deals'));
        $product->toggle_is_new($request->get('is_new'));
        $product->toggle_best($request->get('is_best'));
        $product->toggle_active($request->get('is_active'));
        return redirect()->route('products.index');
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::with('children')->where('parent_id', 0)->get();
        $category = $product->category;
        $delimiter = '';
        return view('admin.products.edit', compact('product','categories','category','delimiter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' =>'required',
            'text'   =>  'required',
            'price'  =>  'required|integer',
            'color' => 'nullable|string',
            'discount' => 'nullable|integer',
            'images.*' =>  'nullable|image'
        ]);
        $product = Product::find($id);
        $product->slug = null;
        $product->edit($request->all());
        $product->uploadImage($request->file('images'));
        $product->setCategory($request->get('category_id'));
        $product->toggle_hot_deals($request->get('hot_deals'));
        $product->toggle_is_new($request->get('is_new'));
        $product->toggle_best($request->get('is_best'));
        $product->toggle_active($request->get('is_active'));

        return redirect()->route('products.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->remove();
        return redirect()->route('products.index');
    }

    public function deleteImage($image_id,$product_id)
    {
        Product::removeOneImage($image_id);
        return redirect()->route('products.edit', $product_id);
    }
}
