@extends('layouts.master')

@section('content')
<div class="container">
    <form action="/members" method="POST">
        @csrf
        <div class="form-group col-md-6">
            <br>
            <label for="firstName">First Name</label>
            <input class="form-control" type="text" name="member_first_name">
        </div>
        <div class="form-group col-md-6">
            <label for="lastName">Last Name</label>
            <input name="member_last_name" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label for="nationalId">National Id</label>
            <input name="member_national_id" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input name="member_email" type="email" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label for="phoneNumber">Phone Number</label>
            <input name="member_phone_number" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label for="">Bank Account Number</label>
            <input name="member_bank_account_number" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label for="postalAddress">Postal Address</label>
            <input name="member_postal_address" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label for="postalCode">Postal code</label>
            <input name="member_postal_code" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label for="location">Location</label>
            <input name="member_location" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label for="memberNumber">Member Number</label>
            <input name="member_number" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label for="payrollNumber">Payroll Number</label>
            <input name="member_payroll_number" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <button class="btn btn-primary sm" type="submit">Submit</button>
        </div>
    </form>
@endsection
