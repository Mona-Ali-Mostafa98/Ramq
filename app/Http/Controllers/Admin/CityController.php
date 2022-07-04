<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City:: all();
        return view('admin.city.index', [
            'cities' => $cities
        ]);
    }

    public function create()
    {
        return view('admin.city.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required','string', 'max:255'],
        ]);
        City::create($data);

        return redirect()->route('admin.cities.index');

    }

    public function destroy($cityId)
    {
        $city = City::find($cityId);
        $city -> delete();
        return redirect()->route('admin.cities.index');
    }
}