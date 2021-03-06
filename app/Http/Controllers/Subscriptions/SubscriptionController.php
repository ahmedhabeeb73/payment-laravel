<?php

namespace App\Http\Controllers\Subscriptions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(Request $request)
    {
        return view('subscriptions.checkout',[
            'intent'=>$request->user()->createSetupIntent()
        ]);
    }


    public  function  store(Request $request)
    {
dd($request->token,$request->name,$request->plan);

    }
}
