<?php

namespace App\Http\Controllers\User;

use App\Model\user\message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KontaktController extends Controller
{

    public function index()
    {
        return view('user.kontakt');
    }

    public function post(Request $request)
    {
        $message = new message;

        $message->name = $request->name;
        $message->email = $request->email;
        $message->title = $request->title;
        $message->body = $request->body;

        $message->save();

        return redirect(route('contact'))->with('message','Poruka je poslata! Odgovor dobijate putem mejla!');
    }
}
