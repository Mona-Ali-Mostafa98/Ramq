<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Models\Partner;
use App\Models\PhoneOfSetting;
use App\Models\PhotoOfSetting;
use App\Models\Setting;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {

        $settings = Setting ::with('phones','photes')->get();
        $settingPhotes = PhotoOfSetting :: all();
        $settingPhones = PhoneOfSetting :: all();
        $partners = Partner :: all();
        $features= Feature::all();
        return view('front.login', [
            'settings' => $settings ,
            'settingPhotoes' => $settingPhotes ,
            'settingPhones' => $settingPhones ,
            'features' => $features ,
            'partners' => $partners ,

        ]);
    }

    public function dologin(Request $request)
    {
        $data = $request -> validate([              //global helpar method
            'email'=> 'required | email',
            'password'=> 'required | string',
        ]);

        if(!auth()->guard('web')-> attempt(['email'=> $data['email'],'password'=> $data['password']]))
        {
            return back();
        }
        else
        {
            return redirect(route('front.index'));

        }
    }

    public function logout()
        {
            auth()->guard('web')-> logout() ;
            return redirect(route('front.login'));

        }


    public function index()
    {
        return view('front.index');
    }
}