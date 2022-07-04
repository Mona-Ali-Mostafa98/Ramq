<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\City;
use App\Models\Feature;
use App\Models\Partner;
use App\Models\PhoneOfSetting;
use App\Models\PhotoOfSetting;
use App\Models\Product;
use App\Models\Region;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }

    public function index()
    {
      $user = Auth::user();
      $carts = Cart::where("user_id", $user->id)->orderby('id', 'desc')->paginate(10);

      $settings = Setting ::with('phones','photes')->get();
      $settingPhotes = PhotoOfSetting :: all();
      $settingPhones = PhoneOfSetting :: all();
      $partners = Partner :: all();
      $features= Feature::all();
      $products = Product:: all();

      return view('front.cart',[
        'user' => $user ,
        'carts' => $carts ,

        'settings' => $settings ,
        'settingPhotoes' => $settingPhotes ,
        'settingPhones' => $settingPhones ,
        'features' => $features ,
        'partners' => $partners ,
        'products' => $products ,

    ]);
    }
    public function create()
    {
        $cities = City::all();
        $regions = Region::all();
        return view('front.cart' , [
            'cities' => $cities ,
            'regions' => $regions ,

        ]);

    }


    public function store(Request $request)
    {
        $this->validate($request, array(
        'user_id'=>'required',
        'product_id' =>'required',
        'city_id' =>'required',
        'region_id' =>'required',

        'full_name' => ['required','string', 'max:255'],
        'id_number' => ['required', 'numeric'],
        'email' => ['required','string' , 'email'],
        'phone' => ['required', 'numeric'],
        'career'=>'required',
        'copy_of_instrument_or_survey_report' => 'required',
        ));

        $status=Cart::where('user_id',Auth::user()->id)
        ->where('product_id',$request->product_id)
        ->first();

        if(isset($status->user_id) and isset($request->product_id))
        {
            return redirect()->back()->with('flash_messaged', 'This item is already in your
            wishlist!');
        }
        else
        {
            $cart = new Cart();

            $cart->user_id = $request->user_id;
            $cart->product_id = $request->product_id;
            $cart->save();

            return  redirect()->route('front.index')->with('flash_message',
                            'Item, '. $cart->product->title.' Added to your wishlist.');
        }
    }

    public function destroy($id)
        {
            $cart = Cart::findOrFail($id);
            $cart->delete();

            return redirect()->route('front.index')
                ->with('flash_message',
                'Item successfully deleted');
        }

}