<?php

namespace App\Http\Controllers\Admin;

use App\Model\user\match;
use App\Model\user\requirement;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\reservation;
use App\Model\user\sector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ZahteviController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->can('requirements')) {
            $requirements = requirement::all();
            $sectors = sector::all();
            $users = User::all();
            $matches = match::all();
            return view('admin.zahtevi.show', compact('requirements','sectors','users','matches'));
        }
        return redirect(route('admin.home'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function accept($id)
    {
        $requirements = requirement::where('id',$id)->first();

        $reservation = new Reservation;

        $reservation->user_id = $requirements->user_id;
        $reservation->sector_id = $requirements->sector_id;
        $reservation->match_id = $requirements->match_id;
        $reservation->tickets = $requirements->tickets;
        $reservation->status = 'Rezervisano';
        $securityCode = Str::random(6);
        $reservation->securityCode = strtoupper($securityCode);

        $s_id = $reservation->sector_id;
        $sector = sector::find($s_id);

        $this->price($reservation);
        $this->viewer($sector, $reservation);

        $sector->save();
        $reservation->save();

        requirement::where('id',$id)->delete();

        return redirect()->back()->with('message','Zahtev je prihvaćen');
    }
    public function price($reservation)
    {
        $s_id = $reservation->sector_id;
        $s_all = sector::where('id',$s_id)->first();
        $price = $s_all->price;
        $ticket_number = $reservation->tickets;
        $price_all = $price * $ticket_number;
        $reservation->totalPrice = $price_all;
    }

    public function viewer($sector, $reservation)
    {
        $view_total = $sector->totalViewer;

        $res_tickets = $reservation->tickets;
        $view_total = $view_total + $res_tickets;

        $viewer = $sector->viewer;
        $procent = $view_total / $viewer * 100;
        $sector->procent = $procent;
        $sector->totalViewer = $view_total;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function discard($id)
    {
        requirement::where('id',$id)->delete();
        return redirect()->back()->with('message1','Zahtev je odbijen');
    }
}
