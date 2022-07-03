<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner:: all();
        return view('admin.partner.index', [
            'partners' => $partners
        ]);
    }

    public function create()
    {
        return view('admin.partner.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'partner_name' => ['required','string', 'max:255'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status'=>'required'
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/partners'), $imageName);
        $partner= Partner::create($data);
        $partner->image = $imageName;           // update partner image record because image not stored in database
        $partner->save();
        /* Store $imageName name in DATABASE from HERE */
        return redirect()->route('admin.partners.index')
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);

    }


    public function show($partnerId)
    {
        $partner = Partner::findOrFail($partnerId);
        return view('admin.partner.show',[
            'partner'=>$partner
        ]);
    }
    public function edit($partnerId)
    {
        $partner = Partner::find($partnerId);
        return view('admin.partner.edit', [
            'partner' => $partner,
        ]);
    }

    public function update(Request $request,Partner $partner)
    {
        $request->validate([
            'partner_name' => ['required','string', 'max:255'],
            'status'=>'required'
        ]);
        $data = $request->all();
        // dd($data);
        if ($image = $request->file('image')) {
            $destinationPath = 'images/partners';
            $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $data['image'] = "$imageName";
        }else{
            unset($data['image']);
        }

        $partner->update($data);

        return redirect()->route('admin.partners.index')
                        ->with('success','Partner updated successfully');
    }

    public function destroy($partnerId)
    {
        $partner = Partner::find($partnerId);
        $partner -> delete();
        return redirect()->route('admin.partners.index');
        // return $partnerId;

    }
}
