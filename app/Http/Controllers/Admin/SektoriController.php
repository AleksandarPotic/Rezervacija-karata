<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\sector;
use App\Model\user\match;
use Illuminate\Support\Facades\Auth;

class SektoriController extends Controller
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
        if (Auth::user()->can('sectors.view')){
            $sectors = Sector::all();
            $matches = Match::all();
            return view('admin.sektori.show',compact('sectors','matches'));
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
        if (Auth::user()->can('sectors.view')) {
            if (Auth::user()->can('sectors.create')){
                $matches = Match::all();
                return view('admin.sektori.sektori', compact('matches'));
            }
            return redirect(route('sektori.index'));
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
            'name'=>'required',
        ]);

        $sektori = new Sector;

        $sektori->name = $request->name;
        $sektori->match_id = $request->match_id;
        $sektori->price = $request->price;
        $sektori->viewer = $request->viewer;
        $sektori->totalViewer = $request->totalViewer;
        $sektori->status = $request->status;

        $sektori->save();

        return redirect(route('sektori.index'))->with('message','Sektor je napravljen');
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
        if (Auth::user()->can('sectors.view')) {
            if (Auth::user()->can('sectors.update')) {
                $sector = sector::where('id', $id)->first();
                $matches = match::all();
                return view('admin.sektori.edit', compact('sector', 'matches'));
            }
            return redirect(route('sektori.index'));
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
            'name'=>'required',
        ]);

        $sektori = Sector::find($id);

        $sektori->name = $request->name;
        $sektori->price = $request->price;
        $sektori->match_id = $request->match_id;
        $sektori->viewer = $request->viewer;
        $sektori->totalViewer = $request->totalViewer;
        $sektori->status = $request->status;

        $sektori->save();

        return redirect(route('sektori.index'))->with('message2','Sektor je promenjen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sector::where('id',$id)->delete();
        return redirect()->back()->with('message1','Sektor je izbrisan');
    }
}
