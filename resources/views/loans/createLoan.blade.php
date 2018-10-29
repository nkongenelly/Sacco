@extends('layouts.official')

@section('content')
<div class="container">
    <form action="/loansCreate" method="POST">
        @csrf
        <input type="hidden" name="member_id">
        <div class="form-group col-md-6">
            <br>
            <label for="firstName">Loan Amount</label>
            <input class="form-control" type="number" name="loan_amount">
        </div>
        <div class="form-group col-md-6">
            <br>
            <label for="firstName">Loan Installments</label>
            <input class="form-control" type="number" name="loan_installments">
        </div>
        <div class="form-group col-md-6">
            
            <label for="nationalId">Loan Type</label>
            <input class="form-control" name="loan_type_id">
        </div>
        <div class="form-group col-md-6">
            <label for="email">Grace Period</label>
            <input class="form-control" name="grace_period" type="number">
        </div>
        <div class="form-group col-md-6">
            <label for="phoneNumber">Application date</label>
            <input name="application_date" type="datetime-local" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label for="">Interest Rate</label>
            <input class="form-control" type="number" name="interest_rate">
        </div>
        <div class="form-group col-md-6">
            <button class="btn btn-primary sm" type="submit">Submit</button>
        </div>
    </form>
@endsection
