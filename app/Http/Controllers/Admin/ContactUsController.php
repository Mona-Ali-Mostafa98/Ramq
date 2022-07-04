<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $contacts = ContactUs:: all();
        return view('admin.contact-us.index', [
            'contacts' => $contacts
        ]);
    }
    public function show($id)
    {
        $contact = ContactUs::findOrFail($id);
        return view('admin.contact-us.show',[
            'contact'=>$contact
        ]);
    }

    public function destroy($id)
    {
        $contact = ContactUs::find($id);
        $contact -> delete();
        return redirect()->route('admin.contact-us.index');
    }
}