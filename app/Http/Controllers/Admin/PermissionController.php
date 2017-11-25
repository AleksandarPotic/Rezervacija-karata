<?php

namespace App\Http\Controllers\Admin;

use App\Model\admin\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PermissionController extends Controller
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
        if (Auth::user()->can('permissions')) {
            $permissions = Permission::all();
            return view('admin.permission.show', compact('permissions'));
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
        if (Auth::user()->can('permissions')) {
            return view('admin.permission.permission');
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
            'name'=>'required|max:50|unique:permissions',
            'for'=>'required',
        ]);
        $permission = new permission;

        $permission->name = $request->name;
        $permission->for = $request->for;

        $permission->save();

        return redirect(route('permission.index'))->with('message','Dozvola je napravljena');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\admin\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\admin\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->can('roles')) {
            $permission = permission::where('id', $id)->first();
            return view('admin.permission.edit', compact('permission'));
        }
        return redirect(route('admin.home'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\admin\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required|max:50',
            'for'=>'required',
        ]);

        $permission = permission::find($id);

        $permission->name = $request->name;
        $permission->for = $request->for;

        $permission->update();

        return redirect(route('permission.index'))->with('message2','Dozvola je promenjana');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\admin\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permission = permission::find($id);

        $permission->delete();

        return redirect(route('permission.index'))->with('message1','Dozvola je izbrisana');
    }
}
