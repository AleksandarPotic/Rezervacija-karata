<?php

namespace App\Http\Controllers\Admin;

use App\Model\admin\role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\Permission;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
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
        if (Auth::user()->can('roles')){
            $roles = role::all();
            return view('admin.role.show',compact('roles'));
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
        if (Auth::user()->can('roles')) {
            $permissions = permission::all();
            return view('admin.role.role', compact('permissions'));
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
            'name'=>'required|max:50|unique:roles',
        ]);
        $role = new role;

        $role->name = $request->name;

        $role->save();

        $role->permissions()->sync($request->permission);

        return redirect(route('role.index'))->with('message','Uloga je napravljena');
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
        if (Auth::user()->can('roles')) {
            $role = role::where('id', $id)->first();
            $permissions = Permission::all();
            return view('admin.role.edit', compact('role', 'permissions'));
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
            'name'=>'required|max:50',
        ]);

        $role = role::find($id);

        $role->name = $request->name;

        $role->update();

        $role->permissions()->sync($request->permission);

        return redirect(route('role.index'))->with('message2','Uloga je promenjena');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = role::find($id);

        $role->delete();

        $role->permissions()->sync($role->permission);

        return redirect(route('role.index'))->with('message1','Uloga je izbrisana');
    }
}
