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
use App\Models\SocialLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
      $socials = SocialLink :: all();


      return view('front.cart',[
        'user' => $user ,
        'carts' => $carts ,
        'settings' => $settings ,
        'settingPhotoes' => $settingPhotes ,
        'settingPhones' => $settingPhones ,
        'features' => $features ,
        'partners' => $partners ,
        'products' => $products ,
        'socials' => $socials ,

        ]);
    }

    public function create()
    {
        $cities = City::all();
        // dd($cities);
        // $regions = Region::all();
        // dd($regions);
        $user = Auth::user();
    //   $carts = Cart::where("user_id", $user->id)->orderby('id', 'desc')->paginate(10);

      $settings = Setting ::with('phones','photes')->get();
      $settingPhotes = PhotoOfSetting :: all();
      $settingPhones = PhoneOfSetting :: all();
      $partners = Partner :: all();
      $features= Feature::all();
      $product = Product:: findOrFail(request('product'));
      $socials = SocialLink :: all();
    //   dd($products);

        return view('front.cart' , [
            'cities' => $cities ,
            // 'regions' => $regions ,
            'user' => $user ,
        // 'carts' => $carts ,

        'settings' => $settings ,
        'settingPhotoes' => $settingPhotes ,
        'settingPhones' => $settingPhones ,
        'features' => $features ,
        'partners' => $partners ,
        'product' => $product ,
        'socials' => $socials ,

        ]);

    }

	public function getRegion(Request $request){
		$city_id = $request->post('city_id');
		$regions=Region::where('city_id',$city_id)->orderBy('name','asc')->get();
		$html='<option value="">Select Region</option>';
		foreach($regions as $region){
			$html.='<option value="'.$region->id.'">'.$region->name.'</option>';
		}
		echo $html;
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
        'policy' => 'accepted',


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
            $cart = Cart::create($request->except('_token'));
            return  redirect()->route('front.index')->with('flash_message',
                            'Item, '. $cart->product->title.' Added to your wishlist.');
        }
    }

}
