<?php

namespace App\Http\Controllers\Admin;

use App\Mail\newMail;
use App\Model\user\message;
use App\Http\Controllers\Controller;
use App\Model\user\requirement;
use App\Model\user\reservation;
use App\Model\user\tiding;
use App\User;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $users = User::all();
        $reservations = reservation::all();
        $requirements = requirement::all();
        $tidings = tiding::all();
        $messages = message::where('status',NULL)->orderBy('created_at','DESC')->paginate(6);
        return view('admin.home',compact('messages','users','reservations','requirements','tidings'));
    }
    public function mail()
    {
        Mail::send(new newMail());
        return redirect()->back();
    }
}
