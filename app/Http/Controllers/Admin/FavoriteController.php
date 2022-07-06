<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function index()
    {

      $user = Auth::user();
      $favorites = Favorite::where("user_id", $user->id )->orderby('id', 'asc')->get();
// dd($favorites);

      return view('admin.favorite.show',[
        'user' => $user ,
        'favorites' => $favorites ,
    ]);
    }
}
