<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\ContactUs;
use App\Models\Partner;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;


class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function dologin(Request $request)
    {
        $data = $request -> validate([              //global helpar method
            'email'=> 'required | email',
            'password'=> 'required | string',
        ]);

        if(!auth()->guard('admin')-> attempt(['email'=> $data['email'],'password'=> $data['password']]))
        {
            return back();
        }
        else
        {
            return redirect(route('admin.home'));

        }
    }

    public function logout()
        {
            auth()->guard('admin')-> logout() ;
            return redirect(route('admin.login'));

        }

    public function index()
    {

        $admins =Admin:: all();
        return view('admin.admin.index', [
            'admins' => $admins,

        ]);
    }

    public function create()
    {
        return view('admin.admin.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required','string', 'max:255'],
            'email' => ['required','string' , 'email'],
            'password' => ['required' , Password::min(8)],

        ]);
        Admin::create($data);

        return redirect()->route('admin.admins.index');

    }

    public function show($adminId)
    {
        $admin = Admin::findOrFail($adminId);
        return view('admin.admin.show',[
            'admin'=>$admin
        ]);
    }
    public function edit($adminId)
    {
        $admin = Admin::find($adminId);
        return view('admin.admin.edit', [
            'admin' => $admin,
        ]);
    }

    public function update(Request $request,Admin $admin)
    {
        $request->validate([
            'name' => ['required','string', 'max:255'],
            'email' => ['required','string' , 'email'],
            // 'password' => ['required' ],

        ]);
        $data = $request->all();
        $admin->update($data);
        // dd($admin->update($data));

        return redirect()->route('admin.admins.index');
    }

    public function destroy($adminId)
    {
        $admin = Admin::find($adminId);
        $admin -> delete();
        return redirect()->route('admin.admins.index');

    }



}
