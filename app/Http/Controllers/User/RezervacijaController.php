<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\reservation;
use App\Model\user\sector;
use App\Model\user\match;
use Illuminate\Support\Facades\Auth;
use App\Model\user\requirement;

class RezervacijaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $date = date("Y-m-d");
        $matches1 = match::all();
        foreach ($matches1 as $match) {
            if ($date > $match->date) {
                $match->status = 0;
                $match->delete();
                $this->deleteSector($match->id);
                $this->deleteReservation($match->id);
                $this->deleteRequirement($match->id);
            }
        }

        $matches = match::where('status', 1)->orderBy('date', 'ASC')->paginate(4);
        $sectors = sector::all();
        return view('user.rezervacija',compact('matches','sectors'));
    }
    public function deleteSector($match_id)
    {
        $sector = sector::where('match_id',$match_id);
        $sector->delete();
    }
    public function deleteReservation($match_id)
    {
        $reservation = reservation::where('match_id',$match_id);
        $reservation->delete();
    }
    public function deleteRequirement($match_id)
    {
        $reservation = requirement::where('match_id',$match_id);
        $reservation->delete();
    }
    public function store(Request $request)
    {
        $sector_id = $request->sector_id;
        $match_id = $request->match_id;

        if ($sector_id == NULL){
            return redirect(route('reservation.show'))->with('message1', 'Niste izabrali sektor za rezervaciju.');
        }

        $user_id = $request->user_id;
        $tick = $request->tickets;

        $reservations = reservation::all();
        $requirements = requirement::all();

        $sector = sector::where('id',$sector_id)->first();
        $viewer = $sector->viewer;
        $totalViewer = $sector->totalViewer;

        $totalFree = $viewer - $totalViewer;

        foreach ($reservations as $reservation) {
            if ($reservation->match_id == $match_id and $reservation->user_id == $user_id) {
                return redirect(route('reservation.show'))->with('message1', 'Već ste rezervisali karte za tu utakmicu');
            }
        }
        foreach ($requirements as $requirement) {
            if ($requirement->match_id == $match_id and $requirement->user_id == $user_id) {
                return redirect(route('reservation.show'))->with('message2', 'Već ste poslali zahtev za tu utakmicu');
            }
        }
        if ($totalFree < $tick){
            if ($totalFree == 1) {
                return redirect(route('reservation.show'))->with('message3', 'Nije moguće rezervisati '.$tick.' karte, ostala je još '.$totalFree.' karta za taj sektor.');
            }else{
                return redirect(route('reservation.show'))->with('message3', 'Nije moguće rezervisati '.$tick.' karte, ostalo je još '.$totalFree.' karte za taj sektor.');
            }
        }
        $requirements = new requirement;

        $this->validate($request, [
            'user_id' => 'required',
            'sector_id' => 'required',
            'tickets' => 'required',
        ]);

        $requirements->user_id = $request->user_id;
        $requirements->sector_id = $request->sector_id;
        $requirements->match_id = $request->match_id;
        $requirements->tickets = $request->tickets;

        $requirements->save();

        return redirect(route('reservation.show'))->with('message', 'Uspešno ste poslali zahtev');
    }
}
