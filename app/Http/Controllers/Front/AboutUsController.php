<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Models\Partner;
use App\Models\PhoneOfSetting;
use App\Models\PhotoOfSetting;
use App\Models\Setting;
use App\Models\SocialLink;
use App\Models\Statistic;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{

    public function index()
    {

        $settings = Setting ::with('phones','photes')->get();
        $settingPhotes = PhotoOfSetting :: all();
        $settingPhones = PhoneOfSetting :: all();
        $partners = Partner :: all();
        $features= Feature::all();
        $socials = SocialLink :: all();

        return view('front.about-us', [
            'settings' => $settings ,
            'settingPhotoes' => $settingPhotes ,
            'settingPhones' => $settingPhones ,
            'features' => $features ,
            'partners' => $partners ,
            'socials' => $socials ,

        ]);
    }

}
