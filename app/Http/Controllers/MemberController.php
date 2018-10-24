<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Member;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();
        return view('nextOfKin.create', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('members.create');
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
            'member_first_name' =>'required',
            'member_last_name' =>'required',
            'member_national_id' =>'required',
            'member_email' =>'required',
            'member_phone_number' =>'required',
            'member_bank_account_number' =>'required',
            'member_postal_address' =>'required',
            'member_postal_code' =>'required',
            'member_location' =>'required',
            'member_number' =>'required',
            'member_payroll_number' =>'required'
        ]);
        Member::create(request(['member_first_name',
            'member_last_name',
            'member_national_id',
            'member_email',
            'member_phone_number',
            'member_bank_account_number',
            'member_postal_address',
            'member_postal_code',
            'member_location',
            'member_number',
            'member_payroll_number'
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
