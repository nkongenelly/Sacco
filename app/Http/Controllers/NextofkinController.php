<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NextofKin;

class NextofKinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $nextOfKins = NextofKin::all();
        return view('nextOfKin.index', compact('nextOfKins'));
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
        //
        $nextOfKins = NextofKin::find($id);

        return view('nextOfKin.edit', compact('nextOfKins'));
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
        $this->validate(request(),[
            'next_of_kin_first_name'=>'required',
            'next_of_kin_last_name'=>'required',
            'next_of_kin_phone_number'=>'required',
            'next_of_kin_national_id'=>'required',
            'next_of_kin_email'=>'required',
            'next_of_kin_status'=>'required',
        ]);

        NextofKin::where('id',$id)->update(request(['next_of_kin_first_name','next_of_kin_last_name','next_of_kin_phone_number','next_of_kin_national_id','next_of_kin_email','next_of_kin_status']));

        return redirect('/nextofkin');
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
