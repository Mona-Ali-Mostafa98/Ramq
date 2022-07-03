<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\DesignInformation;
use App\Models\PhotoOfProduct;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product:: all();
        return view('admin.product.index', [
            'products' => $products
        ]);
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required','string', 'max:255'],
            'description' => ['required','string'],
            'number_of_floors'=>['required', 'numeric'],
            'number_of_rooms'=>['required', 'numeric'],
            'Land_area'=>['required', 'numeric'],
            'price'=>['required', 'numeric'],
            'designed_by'=>['required', 'string'],
            'design_details'=>['required' , 'string'],
            'most_requested'=>'required',
            'design_book'=>'required',
            'notes'=>'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'information' => 'required',
        ]);
        $data = $request->except('information' , 'photo');

        $product=Product::create($data) ;
        if ($images = $request->file('image')) {
            foreach($images as $image){
                $destinationPath = 'images/products';
                $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $imageName);
                $photes = PhotoOfProduct::create([
                    'photo' => $imageName,
                    'product_id' =>$product->id,

                ]);
            }

        }else{
            unset($data['image']);
        }
        // foreach($request->information as $key => $val){

        //     $informations = DesignInformation::where('id',$key+1)->where('product_id', $product->id)->create([
        //         'information' => $val,
        //         'product_id' =>$product->id,
        //     ]);
        // }
        /* Store $imageName name in DATABASE from HERE */
        return redirect()->route('admin.products.index')
            ->with('success','You have successfully upload image.');
    }

    public function show($productId)
    {
        $product = Product::findOrFail($productId);
        return view('admin.product.show',[
            'product'=>$product
        ]);
    }
    public function edit($productId)
    {
        $product = Product::with('photes','informations')->findOrFail($productId);
        return view('admin.product.edit', [
            'product' => $product,
        ]);
    }

    public function update ( Request $request , Product $product)
    {
        // $data = $request->only('title', 'description', 'number_of_floors','number_of_rooms','Land_area','price','designed_by','design_details','most_requested','design_book','notes');
         $request->validate([
            'title' => ['required','string', 'max:255'],
            'description' => ['required','string'],
            'number_of_floors'=>['required', 'numeric'],
            'number_of_rooms'=>['required', 'numeric'],
            'Land_area'=>['required', 'numeric'],
            'price'=>['required', 'numeric'],
            'designed_by'=>['required', 'string'],
            'design_details'=>['required' , 'string'],
            'most_requested'=>'required',
            'design_book'=>'required',
            'notes'=>'required',
            'status'=>'required'
        ]);
        $data = $request->except('information' , 'photo');

        foreach($request->information as $key => $val){

            $informations = DesignInformation::where('id',$key+1)->where('product_id', $product->id)->update([
                'information' => $val,
        ]);
                // dd($val);

    }
    if ($images = $request->file('image')) {
        foreach($images as $image){
            $destinationPath = 'images/products';
            $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $photes = PhotoOfProduct::create([
                'photo' => $imageName,
                'product_id' =>$product->id,

            ]);
        }

    }else{
        unset($data['image']);
    }

        $product->update($data);
        // dd($data);

        return redirect()->route('admin.products.index');
    }

    public function destroy($productId)
    {
        $product = Product::find($productId);
        $product -> delete();
        return redirect()->route('admin.products.index');
        // return $productId;

    }
}