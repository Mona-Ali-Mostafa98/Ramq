<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DiscountCode;
use Illuminate\Http\Request;

class DiscountCodeController extends Controller
{
    public function index()
    {
        $codes = DiscountCode:: all();
        return view('admin.discount-code.index', [
            'codes' => $codes
        ]);
    }

    public function create()
    {
        return view('admin.discount-code.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required','string', 'max:255'],
            'discount_code' => ['required','string' ],
            'price' => ['required' ,'numeric'],
            'discount_type' => ['required'],
        ]);
        DiscountCode::create($data);

        return redirect()->route('admin.codes.index');

    }

    public function show($codeId)
    {
        $code = DiscountCode::findOrFail($codeId);
        return view('admin.discount-code.show',[
            'code'=>$code
        ]);
    }

    public function edit($codeId)
    {
        $code = DiscountCode::find($codeId);
        return view('admin.discount-code.edit', [
            'code' => $code,
        ]);
    }

    public function update(Request $request,DiscountCode $code)
    {
        $request->validate([
            'title' => ['required','string', 'max:255'],
            'discount_code' => ['required','string' ],
            'price' => ['required' ,'numeric'],
            'discount_type' => ['required'],

       ]);
        $data = $request->all();
        // dd($data);
        $code->update($data);

        return redirect()->route('admin.codes.index');
    }

    public function destroy($codeId)
    {
        $code = DiscountCode::find($codeId);
        $code -> delete();
        return redirect()->route('admin.discount-codes.index');

    }
}
