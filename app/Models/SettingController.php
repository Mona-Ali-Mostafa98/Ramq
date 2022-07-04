<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PhoneOfSetting;
use App\Models\PhotoOfSetting;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting:: all();
        return view('admin.setting.index', [
            'settings' => $settings
        ]);
    }

    public function show($settingId)
    {
        $setting = Setting::findOrFail($settingId);
        return view('admin.setting.show',[
            'setting'=>$setting
        ]);
    }
    public function edit()
    {
        $setting = Setting::with('phones','photes')->findOrFail(1);
        return view('admin.setting.edit', [
            'setting' => $setting,
        ]);
    }

    public function update (Setting $setting, Request $request)
    {
        $request->validate([
            // 'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => ['required','string','max:255'],
            'description' => ['required','string'],
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'phone' => 'required|numeric',
            'email' => ['required', 'email'],
            'commercial_registration_no' => ['required','numeric'],
            'tax_number' => ['required','numeric'],
            'status'=>'required'

        ]);

        $data = $request->except('phone' , 'photo');
        foreach($request->phone as $key => $val){

            $phones = PhoneOfSetting::where('id',$key+1)->where('setting_id', $setting->id)->update([
                'phone' => $val,
        ]);

        // dd($val);
        }
        if ($images = $request->file('image')) {
            foreach($images as $image){
                $destinationPath = 'images/settings';
                $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $imageName);
                // $data['image'] = $imageName;
                $photes = PhotoOfSetting::create([
                    'photo' => $imageName,
                    'setting_id' =>$setting->id,
                ]);
            }

        }else{
            unset($data['image']);
        }

        // dd($val);

        if ($logo = $request->file('logo')) {
            $destinationPath = 'images/settings';
            $logoName = date('YmdHis') . "." . $logo->getClientOriginalExtension();
            $logo->move($destinationPath, $logoName);
            $data['logo'] = "$logoName";
        }else{
            unset($data['logo']);
        }

        if ($video = $request->file('video')) {
            $destinationPath = 'images/settings';
            $videoName = date('YmdHis') . "." . $video->getClientOriginalExtension();
            $video->move($destinationPath, $videoName);
            $data['video'] = "$videoName";
        }else{
            unset($data['video']);
        }

        $setting->update($data);

        return redirect()->route('admin.settings.index');
    }

    public function destroy($settingId)
    {
        $setting = Setting::find($settingId);
        $setting -> delete();
        return redirect()->route('admin.settings.index');
    }

    public function deleteImage($id)
    {
        $image = PhotoOfSetting::find($id);
        $image -> delete();
        return redirect()->route('admin.settings.index');
    }
}