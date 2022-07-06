<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\Partner;
use App\Models\PhoneOfSetting;
use App\Models\PhotoOfSetting;
use App\Models\Setting;
use App\Models\SocialLink;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function create()
    {
        $settings = Setting ::with('phones','photes')->get();
        $contacts = ContactUs:: all();
        $settingPhotes = PhotoOfSetting :: all();
        $settingPhones = PhoneOfSetting :: all();
        $partners = Partner :: all();
                $socials = SocialLink :: all();

        return view('front.contact-us',[
            'contacts' => $contacts,
            'settings' => $settings ,
            'settingPhotoes' => $settingPhotes ,
            'settingPhones' => $settingPhones ,
            'partners' => $partners ,
            'socials' => $socials ,

        ]);
    }

    public function store(Request $request)
    {
        // dd('ggg');

        $data = $request->validate([
            'full_name' => ['required','string', 'max:255'],
            'email' => ['required','string' , 'email'],
            'phone' => 'required|numeric',
            'subject' => ['required', 'string'],
            'message' => ['required' , 'string','min:225' ],

        ]);
        ContactUs::create($data);

        return redirect()->route('front.index') ->with('success','  Message Sent Successfuly');

    }

}
