<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Loan;
use App\Banks;
use App\LoanType;
use App\LoanStatus;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        //find all loans applied and have not been deleted
        $loans = Loan::where('deleted','0')->get();
        // dd(count($loans));
       
        return view('loans/createIndex', compact('loans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($member)
    {
        // dd($member);
        //Search for the requesed member details
        $members = Member::where('member_first_name',$member)->get();
    //    dd($members);
        echo json_encode($members);
        // return view('loans/createIndex',compact('members'));
    }
    public function createLoan($id){
        $member = Member::join('banks','banks.id','=','members.bank_id')
                        ->where('members.id',$id)
                        ->select('members.*','banks.bank_code','banks.bank_name','banks.id')
                        ->get();
        $loanTypes = LoanType::all();
        $loanStatus = LoanStatus::all();
        $banks = Banks::all();
        // dd($member);
        //    dd($member);.$loanTypes.$banks
        $results['members']=$member;
        $results['loantypes']=$loanTypes;
        $results['loanstatus']=$loanStatus;
        $results['banks']=$banks;;
        echo json_encode($results);
        //  return view('loans/createLoan',compact('member'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(request('bank_code'));
        $this->validate(request(),[
            'member_id'=>'required',
            'loan_amount'=>'required',
            'loan_installments'=>'required',
            'loan_type_id'=>'required',
            'grace_period'=>'required',
            'application_date'=>'required',
            'interest_rate'=>'required',
        ]);
        $loans = new Loan();
        $loans->loan_type_id = $request->loan_type_id;
        $loans->member_id = $request->member_id;
        $loans->loan_status_id = 1;
        $loans->loan_amount = $request->loan_amount;
        $loans->proposed_amount = $request->loan_amount;
        $loans->grace_period = $request->grace_period;
        $loans->loan_installments = $request->loan_installments;
        $loans->application_date = NULL;
        $loans->approved_date = NULL;
        $loans->disbursed_date = NULL;
        $loans->approved_by = NULL;
        $loans->disbursed_by = NULL;
        $loans->interest_rate = $request->interest_rate;
        $loans->proposed_repayment_amount = NULL;
        $loans->repayment_amount = NULL;
        $loans->loan_number = 1;
        $loans->bank_code = $request->bank_code;
        $loans->member_salary = 40000;
        $loans->member_loan_cleared = 0;
        $loans->deleted = 0;

        $loans->save();
        return view('loans/createIndex');
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
