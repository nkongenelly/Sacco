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
    public function calculateAmortization($id)
    {
        $loans = Loan::join('members','members.id','=','loans.member_id')
                        ->where(['loans.member_id'=>$id,'loans.deleted'=>'0'])
                        ->select('loans.loan_amount', 'loans.interest_rate','loans.loan_installments','members.member_first_name','members.member_last_name')
                        ->get();
                       
    //loop through each month and ccalculate the interest of each
    foreach($loans as $loan){
    $count=0;
    $interest =0;
    $interestA = array();
    $loanAmount=$loan->loan_amount;
    $name = $loan->member_first_name.' '.$loan->member_last_name;
    // dd(0==$loan->loan_installments);
    for($i=0; $i<$loan->loan_installments; $i++){
        // dd($loan->member_first_name.' '.$loan->member_last_name);
        $count++;
        if($count ==1){
            $balance = $loan->loan_amount;
            $interest += ($loan->interest_rate/100)*$balance;
            $interestOnly = ($loan->interest_rate/100)*$balance;
            array_push($interestA,$interestOnly);
        }else{
        
        $balance1 =($loan->loan_amount/$loan->loan_installments)*($count-1);
        $balance = ($loan->loan_amount)-$balance1;
        $interest += ($loan->interest_rate/100)*$balance;
        $interestOnly = ($loan->interest_rate/100)*$balance;
        array_push($interestA,$interestOnly);

            }
    
    }
    $monthlyInterest= $interest/$loan->loan_installments;
    $monthlyPay = ($loan->loan_amount/$loan->loan_installments)+$monthlyInterest;
    $totalRefund = $monthlyPay*$loan->loan_installments;
    }
       $results['name']=$name;
        $results['loanAmount']=$loanAmount;
        $results['interestA']=$interestA;
        $results['interest']=$interest;
        $results['monthlyPay']=$monthlyPay;
        $results['monthlyInterest']=$monthlyInterest;
        $results['totalRefund']=$totalRefund;
        // dd($results);
        echo json_encode($results);
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
