<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;
use App\Order;
use Auth;
use App\User;
use App\Mail\OrdersMail;

class ProductController extends Controller
{
   public function show($id)
   {
       $product = Product::find($id);
       return view('pages.view_product', compact('product'));
   }
   
   public function checkout()
   {
   	return view('pages.checkout', compact('test'));
   }

   public function filter(Request $request)
   {
   	$params = $request->except('_token');
   	$products = Product::filters($params)->paginate(10);

   	return view('pages.view_filters', compact('products'));
   }

   public function search(Request $request)
   {
    $query = $request->input('query');
    $products = Product::search($request->all())->paginate(10);
     return view('pages.search', compact('products'));
   }

   public function order(Request $request)
   {
    //return $request->all();
    $order = new Order;
    $order->cart = $request->get('cart');
    $order->city = $request->get('city');
    $order->name = $request->get('name');
    $order->address = $request->get('address');
    $order->phone_number = $request->get('phone_number');
    $order->email = $request->get('email');
    $order->message = $request->get('message');

    $result = Auth::user()->orders()->save($order);
    $cart = json_decode($request->get('cart'));

    if($result)
    {
      \Mail::to("umidyunisov@mail.ru")->send(new OrdersMail($cart));

      return 'Спасибо ваш заказ оформлен, ожидайте звонка';
    }
    else
    {
      return 'Ошибка';
    }
   }
}
