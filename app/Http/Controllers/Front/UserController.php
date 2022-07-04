<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\PhoneOfSetting;
use App\Models\PhotoOfSetting;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $settings = Setting ::with('phones','photes')->get();
        $settingPhotes = PhotoOfSetting :: all();
        $settingPhones = PhoneOfSetting :: all();
        $partners = Partner :: all();

        return view('front.profile', [
            'users' => $users ,
            'settings' => $settings ,
            'settingPhotoes' => $settingPhotes ,
            'settingPhones' => $settingPhones ,
            'partners' => $partners ,

        ]);
    }

    // public function create()
    // {
    //     return view('admin.user.create');
    // }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required','string', 'max:255'],
            'email' => ['required','string' , 'email'],
            'phone' => ['required' ,'numeric'],
            'city' => ['required'],
            'state' => ['required' ],
            'password' => ['required', Password::min(8)],

        ]);
        $user = User::create($data);
        auth()->login($user); //to regester and make login

        return redirect()->route('front.profile');

    }

    // public function edit($userId)
    // {
    //     $user = User::find($userId);
    //     return view('admin.social.edit', [
    //         'user' => $user,
    //     ]);
    // }

    public function update(Request $request,user $user)
    {
        $request->validate([
            'name' => ['required','string', 'max:255'],
            'email' => ['required','string' , 'email'],
            'phone' => 'required|numeric',
            'city' => ['required'],
            'state' => ['required' ],
            // 'password' => ['required' ],

        ]);
        $data = $request->all();
        $user->update($data);
        return redirect()->route('front.profile');
    }
}
