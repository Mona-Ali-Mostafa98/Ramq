<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
     public function index()
    {
//                         $city= City::all();
// dd($city);
      $user = Auth::user();
      $carts = Cart::with('city','region')->where("user_id", $user->id)->orderby('id', 'desc')->get();
// dd($carts);
      return view('admin.cart.show',[
        'user' => $user ,
        'carts' => $carts ,

    ]);

    }
}
