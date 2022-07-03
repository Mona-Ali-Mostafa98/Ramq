<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index()
    {
        $features = Feature:: all();
        return view('admin.feature.index', [
            'features' => $features
        ]);
    }

    public function create()
    {
        return view('admin.feature.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required','string', 'max:255'],
            'description' => ['required','string'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status'=>'required'
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/features'), $imageName);
        $feature= Feature::create($data);
        $feature->image = $imageName;           // update feature image record because image not stored in database
        $feature->save();
        /* Store $imageName name in DATABASE from HERE */
        return redirect()->route('admin.features.index')
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);

    }


    public function show($featureId)
    {
        $feature = Feature::findOrFail($featureId);
        return view('admin.feature.show',[
            'feature'=>$feature
        ]);
    }
    public function edit($featureId)
    {
        $feature = Feature::find($featureId);
        return view('admin.feature.edit', [
            'feature' => $feature,
        ]);
    }

    public function update(Request $request,Feature $feature)
    {
        $request->validate([
            'title' => ['required','string', 'max:255'],
            'description' => ['required','string'],
            'status'=> ['required']
        ]);
        $data = $request->all();
        // dd($data);
        if ($image = $request->file('image')) {
            $destinationPath = 'images/features';
            $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $data['image'] = "$imageName";
        }else{
            unset($data['image']);
        }

        $feature->update($data);

        return redirect()->route('admin.features.index')
                        ->with('success','Product updated successfully');
    }

    public function destroy($featureId)
    {
        $feature = Feature::find($featureId);
        $feature -> delete();
        return redirect()->route('admin.features.index');

    }}
