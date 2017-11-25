<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\tiding;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class VestiController extends Controller
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
        $tidings = Tiding::all();
        return view('admin.vesti.show',compact('tidings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->can('tidings.create')){
            return view('admin.vesti.vesti');
        }else{
            return redirect(route('vesti.index'));
        }
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
            'title'=>'required',
            'subtitle'=>'required',
            'slug'=>'required',
            'body'=>'required',
            'image'=>'required'
        ]);

        $tidings = new tiding;

        //Input image to server and db
        if (Input::hasFile('image')) {
            $file = Input::file('image');
            $file->move('uploads', Input::file('image')->getClientOriginalName());

            $tidings->image = Input::file('image')->getClientOriginalName();
        }
            $tidings->title = $request->title;
            $tidings->subtitle = $request->subtitle;
            $tidings->slug = $request->slug;
            $tidings->date = $request->date;
            $tidings->status = $request->status;
            $tidings->body = $request->body;
            $tidings->save();

        return redirect(route('vesti.index'))->with('message','Vest je objavljena');
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
        if (Auth::user()->can('tidings.update')) {
            $tiding = Tiding::where('id', $id)->first();
            return view('admin.vesti.edit', compact('tiding'));
        }else{
            return redirect(route('vesti.index'));
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

        $this->validate($request,[
            'title'=>'required',
            'subtitle'=>'required',
            'slug'=>'required',
            'body'=>'required',
            'image'=>'required'
        ]);

        $tidings = Tiding::find($id);

        //Input image to server and db
        if (Input::hasFile('image')) {
            $file = Input::file('image');
            $file->move('uploads', Input::file('image')->getClientOriginalName());

            $tidings->image = Input::file('image')->getClientOriginalName();
        }

        $tidings->title = $request->title;
        $tidings->subtitle = $request->subtitle;
        $tidings->slug = $request->slug;
        $tidings->date = $request->date;
        $tidings->status = $request->status;
        $tidings->body = $request->body;

        $tidings->save();

        return redirect(route('vesti.index'))->with('message2','Vest je promenjena');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tiding::where('id',$id)->delete();
        return redirect()->back()->with('message1','Vest je izbrisana');
    }
}
