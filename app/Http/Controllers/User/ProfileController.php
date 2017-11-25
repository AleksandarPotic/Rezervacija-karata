<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ProfileController extends Controller
{
    public function index()
    {
        return view('user.profile');
    }

    public function image(Request $request)
    {
        $id = $request->id;

        $users = User::find($id);

        if (Input::hasFile('image')) {
            $file = Input::file('image');
            $file->move('uploads', Input::file('image')->getClientOriginalName());

            $users->image = Input::file('image')->getClientOriginalName();
        }

        $users->save();

        return redirect(route('profile'));
    }
}
