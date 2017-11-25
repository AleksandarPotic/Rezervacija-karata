<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\match;
use App\Model\user\sector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class UtakmiceController extends Controller
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
        if (Auth::user()->can('matches.view')) {
            $matches = Match::all();
            return view('admin.utakmice.show', compact('matches'));
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
        if (Auth::user()->can('matches.view')) {
            if (Auth::user()->can('matches.create')){
                return view('admin.utakmice.utakmice');
            }
            return redirect(route('utakmice.index'));
        }
        return redirect(route('admin.home'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'nameHome'=>'required',
            'nameAway'=>'required',
        ]);

        $utakmice = new Match;

        if (Input::hasFile('imageHome')) {
            $file = Input::file('imageHome');
            $file->move('uploads', Input::file('imageHome')->getClientOriginalName());

            $utakmice->imageHome = Input::file('imageHome')->getClientOriginalName();
        }
        if (Input::hasFile('imageAway')) {
            $file = Input::file('imageAway');
            $file->move('uploads', Input::file('imageAway')->getClientOriginalName());

            $utakmice->imageAway = Input::file('imageAway')->getClientOriginalName();
        }

        $utakmice->date = $request->date;
        $utakmice->time = $request->time;
        $utakmice->nameHome = $request->nameHome;
        $utakmice->nameAway = $request->nameAway;
        $utakmice->status = $request->status;
        $utakmice->ticketsForOne = $request->ticketsForOne;

        $utakmice->save();

        return redirect(route('utakmice.index'))->with('message','Utakmica je kreirana uspešno');
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
        if (Auth::user()->can('matches.view')) {
                if (Auth::user()->can('matches.update')){
                $match = match::where('id',$id)->first();
                return view('admin.utakmice.edit',compact('match'));
            }
            return redirect(route('utakmice.index'));
        }
        return redirect(route('admin.home'));
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
        $this->validate($request,[
            'nameHome'=>'required',
            'nameAway'=>'required',
        ]);

        $utakmice = Match::find($id);

        if (Input::hasFile('imageHome')) {
            $file = Input::file('imageHome');
            $file->move('uploads', Input::file('imageHome')->getClientOriginalName());

            $utakmice->imageHome = Input::file('imageHome')->getClientOriginalName();
        }
        if (Input::hasFile('imageAway')) {
            $file = Input::file('imageAway');
            $file->move('uploads', Input::file('imageAway')->getClientOriginalName());

            $utakmice->imageAway = Input::file('imageAway')->getClientOriginalName();
        }

        $utakmice->date = $request->date;
        $utakmice->time = $request->time;
        $utakmice->nameHome = $request->nameHome;
        $utakmice->nameAway = $request->nameAway;
        $utakmice->status = $request->status;
        $utakmice->ticketsForOne = $request->ticketsForOne;

        $utakmice->save();

        return redirect(route('utakmice.index'))->with('message2','Utakmica je izmenjena');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $matches = Match::with('sector')->where('id',$id)->delete();

        return redirect()->back()->with('message1','Utakmica je izbrisana');
    }
}
