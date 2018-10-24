<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Member;

use Auth;

use App\NextOfKin;

class NextOfKinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $member = Member::find($id);
        return view('nextOfKin.create', compact('member'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'next_of_kin_first_name' =>'required',
            'next_of_kin_last_name' =>'required',
            'next_of_kin_location' =>'required'
        ]);
        NextOfKin::create(request([
            'member_id',
            'next_of_kin_first_name',
            'next_of_kin_last_name',
            'next_of_kin_national_id',
            'next_of_kin_email',
            'next_of_kin_phone_number',
            'next_of_kin_location',
            'created_by'=>Auth::user()->id,
        ]));
        return redirect('/roles');
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
    public function destroy($id)
    {
        //
    }
}
