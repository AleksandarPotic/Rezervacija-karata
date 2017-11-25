<?php

namespace App\Http\Controllers\User;

use App\Model\user\tiding;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NaslovnaController extends Controller
{
    public function index()
    {
        $posts = tiding::where('status',1)->orderBy('created_at','DESC')->paginate(6);
        return view('user.naslovna',compact('posts'));
    }
}
