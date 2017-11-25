<?php

namespace App\Http\Controllers\User;

use App\Model\user\match;
use App\Model\user\requirement;
use App\Model\user\reservation;
use App\Model\user\sector;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index()
    {
        $reservations = reservation::all();
        $requirements = requirement::all();
        $sectors = sector::all();
        $matches = match::all();
        return view('user.cart',compact('reservations','sectors','matches','requirements'));
    }
    public function destroy($id)
    {
        $reservation = Reservation::find($id);
        $sector_id = $reservation->sector_id;
        $sector = Sector::find($sector_id);

        $this->viewer($reservation,$sector);

        $sector->save();
        $reservation->delete();
        return redirect()->back()->with('message1','Rezervacija je obrisana');
    }
    public function viewer($reservation, $sector)
    {
        $tickets = $reservation->tickets;
        $totalViewer = $sector->totalViewer;
        $totalViewer = $totalViewer - $tickets;
        $viewer = $sector->viewer;
        $procent = $totalViewer / $viewer * 100;

        $sector->procent = $procent;
        $sector->totalViewer = $totalViewer;
    }
    public function requirementDestroy($id)
    {
        requirement::where('id',$id)->delete();
        return redirect()->back()->with('message1','Zahtev je obrisan');
    }
}
