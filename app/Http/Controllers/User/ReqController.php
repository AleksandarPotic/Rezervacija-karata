<?php

namespace App\Http\Controllers\User;

use App\Model\user\match;
use App\Model\user\requirement;
use App\Model\user\sector;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReqController extends Controller
{
    public function index(){
        $requirements = requirement::all();
        $sectors = sector::all();
        $matches = match::all();
        return view('user.req',compact('requirements','sectors','matches'));
    }

    public function destroy($id)
    {
        $requirement = requirement::find($id);

        $requirement->delete();
        return redirect()->back()->with('message1','Zahtev je obrisan');
    }
}
