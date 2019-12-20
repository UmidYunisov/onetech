<?php

namespace App\Http\Controllers;

use App\Subscriber;
use App\Mail\SubscribeEmail;
use Illuminate\Http\Request;

class SubsController extends Controller
{
    public function subscribe(Request $request)
    {
    	$this->validate($request, [
    		'email' => 'required|email|unique:subscribers'
    	]);
    	$subs = Subscriber::add($request->get('email'));
        $subs->generateToken();

    	\Mail::to($subs)->send(new SubscribeEmail($subs));

    	return redirect()->back()->with('status','Проверьте вашу почту');
    }

    public function verify($token)
    {
    	$subs = Subscriber::where('token', $token)->firstOrFail();
    	$subs->token = null;
    	$subs->save();
    	return redirect('/')->with('status', 'Спасибо! Ваша почта подтверждена.');
    }
}
