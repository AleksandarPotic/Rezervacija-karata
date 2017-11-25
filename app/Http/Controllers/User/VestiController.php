<?php

namespace App\Http\Controllers\User;

use App\Model\user\tiding;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VestiController extends Controller
{
    public function index()
    {
        $posts = tiding::where('status',1)->orderBy('created_at','DESC')->paginate(5);
        return view('user.vesti',compact('posts'));
    }
}
