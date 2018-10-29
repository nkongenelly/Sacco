@extends('layouts.official')

@section('content')

<div id="DisbursedLoans">

    
<table class="table table-condensed table-striped table-hover table-bordered">
        <tr>
            <th>#</th>
            <th>Member Name</th>
            <th>Loan Type</th>
            <th>Loan Status</th>
            <th>Loan Amount</th>
            <th>Loan installments</th>
            <th>Interest Rate</th>
        </tr>
        @foreach($loans as $loan)
        @if($sum >= (3*($loan->loan_amount)) && count($guarantors) <=3 && $guarantor->guaranteed_amount <=$sumGuarantors))
                <tr>
                    <td>{{ $loan->id}}</td>
                    <td>{{ $loan->member['member_first_name'] }} {{ $loan->member['member_last_name'] }}</td>
                    <td>{{ $loan->loanType->loan_type_name }}</td>
                    <td>{{ $loan->loanStatus->loan_status_name }}</td>
                    <td>{{ $loan->loan_amount }}</td>
                    <td>{{ $loan->loan_installments }} months</td>
                    <td>{{ $loan->interest_rate }} %</td>                 
                
                </tr>
                @endif
                @endforeach
      
</table>

</div>
@endsection