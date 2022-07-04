<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        // $data['sliders']=Slider::select('id', 'title','descreption','image')->get();
        // return view('admin.slider.index')->with($data);
        $sliders = Slider:: all();
        return view('admin.slider.index', [
            'sliders' => $sliders
        ]);
    }

    public function create()
    {

        return view('admin.slider.create');
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
        $request->image->move(public_path('images/sliders'), $imageName);
        $slider= Slider::create($data);
        $slider->image = $imageName;           // update slider image record because image not stored in database
        $slider->save();
        /* Store $imageName name in DATABASE from HERE */
        return redirect()->route('admin.sliders.index')
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);

    }


    public function show($sliderId)
    {
        $slider = Slider::findOrFail($sliderId);
        return view('admin.slider.show',[
            'slider'=>$slider
        ]);
    }
    public function edit($sliderId)
    {
        $slider = Slider::find($sliderId);
        return view('admin.slider.edit', [
            'slider' => $slider,
        ]);
    }

    public function update(Request $request,Slider $slider)
    {
        $request->validate([
            'title' => ['required','string', 'max:255'],
            'description' => ['required','string'],
        ]);
        $data = $request->all();
        // dd($data);
        if ($image = $request->file('image')) {
            $destinationPath = 'images/sliders';
            $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $data['image'] = "$imageName";
        }else{
            unset($data['image']);
        }

        $slider->update($data);

        return redirect()->route('admin.sliders.index')
                        ->with('success','Product updated successfully');
    }

    public function destroy($sliderId)
    {
        $slider = Slider::find($sliderId);
        $slider -> delete();
        return redirect()->route('admin.sliders.index');
        // return $sliderId;

    }
}