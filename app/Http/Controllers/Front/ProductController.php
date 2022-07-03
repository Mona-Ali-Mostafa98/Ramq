<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\PhoneOfSetting;
use App\Models\PhotoOfSetting;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product:: all();
        $settings = Setting ::with('phones','photes')->get();
        $settingPhotes = PhotoOfSetting :: all();
        $settingPhones = PhoneOfSetting :: all();
        $partners = Partner :: all();
        return view('front.products', [
            'products' => $products ,
            'settings' => $settings ,
            'settingPhotoes' => $settingPhotes ,
            'settingPhones' => $settingPhones ,
            'partners' => $partners ,
        ]);
    }

    public function show($productId)
    {
        $product = Product::findOrFail($productId);
        $settings = Setting ::with('phones','photes')->get();
        $settingPhotes = PhotoOfSetting :: all();
        $settingPhones = PhoneOfSetting :: all();
        $partners = Partner :: all();
        return view('front.product',[
            'product'=>$product,
            'settings' => $settings ,
            'settingPhotoes' => $settingPhotes ,
            'settingPhones' => $settingPhones ,
            'partners' => $partners ,
        ]);
    }
}