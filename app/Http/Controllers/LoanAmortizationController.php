<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Loan;
class LoanAmortizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('loans.amortizationIndex');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($name)
    {
        // dd(request('member_first_name'));
        //Search for a particular member and use that member_id to get member loan details
        $memberName = Member::where(['member_first_name'=>$name,'deleted'=>'0'])
                            ->get();
                    //    dd($memberName);     
        echo json_encode($memberName);
    }
    

    public function fetchLoans($id)
    {
        // dd(request('member_first_name'));
        //Search for a particular member and use that member_id to get member loan details
        $memberLoans = Loan::join('members','members.id','=','loans.member_id')
                        ->where(['loans.member_id'=>$id,'loans.deleted'=>'0'])
                        ->select('loans.*','members.member_first_name','members.member_last_name','members.id')
                        ->get();

        echo json_encode($memberLoans);
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
