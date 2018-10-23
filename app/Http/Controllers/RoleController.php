<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Role;
use App\User;
use Auth;
class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact(['roles']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.createRole');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'role_name' => 'required',
            'role_status' =>'required'

        ]);
       
        Role::create([
            'role_name'=> $request->role_name,
            'role_status'=> $request->role_status,
            'created_by'=>Auth::user()->id,
        ]);
        $roles = Role::all();
        // Role::create(request(['role_name', 'role_status','Auth::user()->id']));
        return view('roles.index', compact(['roles']));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Role::where('id', $id)
            ->update([
                'deleted'=>1 , 'deleted_on'=>date('Y-m-d H:i:s'), 'deleted_by' => Auth::user()->id
            ]);
            return redirect('/roles');
    }
}
