<?php

namespace App\Http\Controllers\Admin;

use App\Model\user\message;
use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PorukeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        if (Auth::user()->can('messages')){
            $messages = message::all();
            return view('admin.poruke.show',compact('messages'));
        }
        return redirect(route('admin.home'));
    }
}
