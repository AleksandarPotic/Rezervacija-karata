<?php

namespace App\Http\Controllers\Admin;

use App\Model\user\match;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\reservation;
use App\Model\user\sector;
use Illuminate\Support\Facades\Auth;

class RezervacijeController extends Controller
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
    public function index()
    {
        if (Auth::user()->can('reservations.view')) {
            $reservations = Reservation::all();
            $sectors = Sector::all();
            $matches = match::all();
            $users = User::all();
            return view('admin.rezervacije.show', compact('reservations', 'sectors','users','matches'));
        }
        return redirect(route('admin.home'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->can('reservations.view')) {
            if (Auth::user()->can('reservations.update')) {
                $reservation = reservation::with('sector')->where('id', $id)->first();
                $sectors = Sector::all();
                $matches = match::all();
                return view('admin.rezervacije.edit', compact('reservation', 'sectors','matches'));
            }
            return redirect(route('rezervacija.index'));
        }else{
            return redirect(route('admin.home'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reservation = Reservation::find($id);

        $reservation->status = $request->status;

        $reservation->save();

        return redirect(route('rezervacija.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservation = Reservation::find($id);
        $s_id = $reservation->sector_id;
        $sector = Sector::find($s_id);

        $this->viewer($sector, $reservation);

        $sector->save();
        $reservation->delete();
        return redirect()->back()->with('message1','Rezervacija je obrisana');
    }
    public function viewer($sector, $reservation)
    {
        $tickets = $reservation->tickets;
        $view_total = $sector->totalViewer;
        $view_total = $view_total - $tickets;
        $viewer = $sector->viewer;
        $procent = $view_total / $viewer * 100;
        $sector->procent = $procent;
        $sector->totalViewer = $view_total;
    }
}
