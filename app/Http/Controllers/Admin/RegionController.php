<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function index()
    {
        $regions = Region:: all();
        return view('admin.region.index', [
            'regions' => $regions
        ]);
    }

    public function create()
    {
        $cities = City::all();
        return view('admin.region.create' , [
            'cities'=>$cities
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required','string', 'max:255'],
            'city_id' => 'required',
        ]);
        Region::create($data);

        return redirect()->route('admin.regions.index');

    }

    public function destroy($regionId)
    {
        $region = Region::find($regionId);
        $region -> delete();
        return redirect()->route('admin.regions.index');
    }
}