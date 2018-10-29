@extends('layouts.official')

@section('content')
<div class="container">
    <form action="/members/{{$member->id}}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <div class="form-group col-md-6">
            <br>
            <label for="firstName">First Name</label>
            <input class="form-control" type="text" name="member_first_name" value="{{$member->member_first_name}}">
        </div>
        <div class="form-group col-md-6">
            <label for="lastName">Last Name</label>
            <input name="member_last_name" class="form-control" value="{{$member->member_first_name}}">
        </div>
        <div class="form-group col-md-6">
            <label for="nationalId">National Id</label>
            <input name="member_national_id" class="form-control" value="{{$member->member_national_id}}">
        </div>
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input name="member_email" type="email" class="form-control" value="{{$member->member_email}}">
        </div>
        <div class="form-group col-md-6">
            <label for="phoneNumber">Phone Number</label>
            <input name="member_phone_number" class="form-control" value="{{$member->member_phone_number}}">
        </div>
        <div class="form-group col-md-6">
            <label for="">Bank Account Number</label>
            <input name="member_bank_account_number" class="form-control" value="{{$member->member_bank_account_number}}">
        </div>
        <div class="form-group col-md-6">
            <label for="postalAddress">Postal Address</label>
            <input name="member_postal_address" class="form-control" value="{{$member->member_postal_address}}">
        </div>
        <div class="form-group col-md-6">
            <label for="postalCode">Postal code</label>
            <input name="member_postal_code" class="form-control" value="{{$member->member_postal_code}}">
        </div>
        <div class="form-group col-md-6">
            <label for="location">Location</label>
            <input name="member_location" class="form-control" value="{{$member->member_location}}">
        </div>
        <div class="form-group col-md-6">
            <label for="memberNumber">Member Number</label>
            <input name="member_number" class="form-control" value="{{$member->member_number}}">
        </div>
        <div class="form-group col-md-6">
            <label for="payrollNumber">Payroll Number</label>
            <input name="member_payroll_number" class="form-control" value="{{$member->member_payroll_number}}">
        </div>
        <div class="form-group col-md-6">
            <a href="/documents" class="btn btn-warning">Go Back</a>
            <button class="btn btn-primary sm" type="submit">update</button>
        </div>
    </form>
@endsection
