<?php

namespace App\Http\Controllers\Front;

use App\Models\Feature;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Favorite;
use Illuminate\Http\Request;
use App\Models\PhoneOfSetting;
use App\Models\PhotoOfSetting;
use App\Http\Controllers\Controller;
use App\Models\SocialLink;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }

    public function index()
    {
      $user = Auth::user();
    //   $user = optional(Auth::user())->id;
      $favorites = Favorite::where("user_id", $user->id)->orderby('id', 'desc')->paginate(10);

      $settings = Setting ::with('phones','photes')->get();
      $settingPhotes = PhotoOfSetting :: all();
      $settingPhones = PhoneOfSetting :: all();
      $partners = Partner :: all();
      $features= Feature::all();
      $products = Product:: all();
        $socials = SocialLink :: all();

      return view('front.favorite',[
        'user' => $user ,
        'favorites' => $favorites ,
        'settings' => $settings ,
        'settingPhotoes' => $settingPhotes ,
        'settingPhones' => $settingPhones ,
        'features' => $features ,
        'partners' => $partners ,
        'products' => $products ,
        'socials' => $socials ,

    ]);

    }
    public function store(Request $request)
    {
        $this->validate($request, array(
        'user_id'=>'required',
        'product_id' =>'required',
        ));

        $status=Favorite::where('user_id',Auth::user()->id)
        ->where('product_id',$request->product_id)
        ->first();

        if(isset($status->user_id) and isset($request->product_id))
        {
            return redirect()->back()->with('flash_messaged', 'This item is already in your
            wishlist!');
        }
        else
        {
            $favorite = new Favorite();

            $favorite->user_id = $request->user_id;
            $favorite->product_id = $request->product_id;
            $favorite->save();

            return  redirect()->route('front.favorites')->with('flash_message',
                            'Item, '. $favorite->product->title.' Added to your wishlist.');
        }
    }

    public function destroy($id)
        {
            $favorite = Favorite::findOrFail($id);
            $favorite->delete();

            return redirect()->route('front.index')
                ->with('flash_message',
                'Item successfully deleted');
        }


}
