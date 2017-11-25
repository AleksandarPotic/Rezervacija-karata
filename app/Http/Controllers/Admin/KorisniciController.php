<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Model\admin\role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class KorisniciController extends Controller
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
        if (Auth::user()->can('users.view')) {
            $users = Admin::all();
            return view('admin.korisnici.show', compact('users'));
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
        if (Auth::user()->can('users.view')) {
            if (Auth::user()->can('users.create')) {
                $roles = role::all();
                return view('admin.korisnici.korisnici', compact('roles'));
            }
            return redirect(route('korisnici.index'));
        }else{
            return redirect(route('admin.home'));
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
            'name' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $request['password'] = bcrypt($request->password);
        $user = Admin::create($request->all());
        $user->roles()->sync($request->role);
        return redirect(route('korisnici.index'))->with('message','Korisnik je napravljen');
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
        if (Auth::user()->can('users.view')) {
            if (Auth::user()->can('users.update')) {
                $user = Admin::where('id', $id)->first();
                $roles = role::all();
                return view('admin.korisnici.edit', compact('user', 'roles'));
            }
            return redirect(route('korisnici.index'));
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
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
        ]);

        $request->status? : $request['status']=0;

        $user = admin::where('id',$id)->update($request->except('_token','_method','role'));
        admin::find($id)->roles()->sync($request->role);

        return redirect(route('korisnici.index'))->with('message2','Korisnik je promenjen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = admin::find($id);

        $user->delete();

        $user->roles()->sync($user->role);
        return redirect(route('korisnici.index'))->with('message1','Korisnik je izbrisan');
    }
}
