<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $user = Auth::user();

        $users = User:: all();
      $favorites = Favorite::where("user_id", $user->id)->orderby('id', 'desc')->paginate(10);
        return view('admin.user.index', [
            'users' => $users,
            'favorites' => $favorites

        ]);
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required','string', 'max:255'],
            'email' => ['required','string' , 'email'],
            'phone' => ['required' ,'numeric'],
            'city' => ['required'],
            'state' => ['required' ],
            'password' => ['required' , Password::min(8)],

        ]);
        User::create($data);

        return redirect()->route('admin.users.index');

    }

    public function show($userId)
    {
        $user = user::findOrFail($userId);
        return view('admin.user.show',[
            'user'=>$user
        ]);
    }
    public function edit($userId)
    {
        $user = User::find($userId);
        return view('admin.user.edit', [
            'user' => $user,
        ]);
    }

    public function update(Request $request,User $user)
    {
        $request->validate([
            'name' => ['required','string', 'max:255'],
            'email' => ['required','string' , 'email'],
            'phone' => 'required|numeric',
            'city' => ['required'],
            'state' => ['required' ],
            // 'password' => ['required' ],

        ]);
        $data = $request->all();
        $user->update($data);
        // dd($user->update($data));

        return redirect()->route('admin.users.index');
    }

    public function destroy($userId)
    {
        $user = User::find($userId);
        $user -> delete();
        return redirect()->route('admin.users.index');

    }
}
