<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loan;
use App\Saving;
use App\LoanGuarantor;
use App\Member;
class LoanDisbursmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show loans applied that are 3 times members savings or less
        $loans =Loan::all();
        $sum=0;
        foreach($loans as $loan){
            $savings = Saving::where(['member_id'=>$loan->member_id,'deleted'=>'0'])
                                ->select('saving_amount')
                                ->get();
            foreach($savings as $saving){
                $sum +=$saving->saving_amount;

            }
        //verify guarantors
        $sumGuarantors =0;
        $guarantors = LoanGuarantor::where(['loan_id'=>$loan->id,'deleted'=>'0'])
                                    ->select('loan_id','guaranteed_amount')
                                    ->get();
        foreach($guarantors as $guarantor){
            $memberId = Member::where(['member_id'=>$guarantor->member_id])
                            ->select('member_id')
                            ->get();
            foreach($memberId as $member){
                $sumGuarantors += $member->savings->saving_amount;
            }
            
        }
       
        }
        
        // dd(count($guarantors) <=3);
        
        return view('loans.disburseLoanIndex', compact('loans','sum','guarantors','guarantor','sumGuarantors'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
