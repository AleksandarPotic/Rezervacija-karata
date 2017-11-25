<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Model\user\tiding;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function post(tiding $post)
    {
        return view('user.post',compact('post'));
    }
}
