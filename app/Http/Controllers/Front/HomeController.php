<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\DesignInformation;
use App\Models\Partner;
use App\Models\PhoneOfSetting;
use App\Models\PhotoOfProduct;
use App\Models\PhotoOfSetting;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Statistic;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $slidbars = Slider :: all();

        $settings = Setting ::with('phones','photes')->get();
        $settingPhotes = PhotoOfSetting :: all();
        $settingPhones = PhoneOfSetting :: all();

        $products = Product :: all();
        $productPhotes = PhotoOfProduct :: all();
        $productInformations = DesignInformation :: all();

        $partners = Partner :: all();
        $statistic = Statistic::all();

        $products_count=Product::count();
        $users_count=User::count();

        return view('front.index', [
            'slidbars' => $slidbars ,

            'settings' => $settings ,
            'settingPhotoes' => $settingPhotes ,
            'settingPhones' => $settingPhones ,

            'products' => $products ,
            'productPhotes' => $productPhotes ,
            'productInformations' => $productInformations ,

            'statistic' => $statistic ,
            'partners' => $partners ,

            'products_count' => $products_count ,
            'users_count' => $users_count ,

        ]);

    }

}