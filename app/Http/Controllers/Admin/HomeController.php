<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\Partner;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
        public function index()
    {
        $products_count = Product:: count();
        $users_count = User:: count();
        $partners_count = Partner:: count();
        $contacts_count = ContactUs:: count();
        // $last_users = User::orderedBy('id')->take(5)->get();
        return view('admin.index' , [
            'products_count' => $products_count,
            'users_count' => $users_count,
            'partners_count' => $partners_count,
            'contacts_count' => $contacts_count,
            // 'last_users' => $last_users,
        ]);
    }
}
