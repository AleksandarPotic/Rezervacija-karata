<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class AdminProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin.profile.profile');
    }

    public function image(Request $request)
    {
        $id = $request->id;

        $users = Admin::find($id);

        if (Input::hasFile('image')) {
            $file = Input::file('image');
            $file->move('uploads', Input::file('image')->getClientOriginalName());

            $users->image = Input::file('image')->getClientOriginalName();
        }

        $users->save();

        return redirect(route('admin.profile'));
    }
}
