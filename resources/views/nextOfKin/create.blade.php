@extends('layouts.master')

@section('content')
<div class="container">
    <form action="/kin" method="POST">
        @csrf
        <input type="hidden" name="member_id" value="{{$member->id}}">
        <div class="form-group col-md-6">
            <label for="memberName">Member Name</label>
            <input  class="form-control" value="{{$member->member_first_name}} {{$member->member_last_name}}" readOnly>
        </div>
        <div class="form-group col-md-6">
            <label for="memberNumber">Member Number</label>
            <input  class="form-control" value="{{$member->member_number}}" readOnly>
        </div>
        <div class="form-group col-md-6">
            <br>
            <label for="firstName">Next of Kin First Name</label>
            <input class="form-control" type="text" name="next_of_kin_first_name">
        </div>
        <div class="form-group col-md-6">
            <label for="lastName">Next of Kin Last Name</label>
            <input name="next_of_kin_last_name" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label for="nationalId">Next of Kin National Id</label>
            <input name="next_of_kin_national_id" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label for="phoneNumber">Next of Kin Phone Number</label>
            <input name="next_of_kin_phone_number" class="form-control">
        </div>
        
        <div class="form-group col-md-6">
            <label for="email">Next of Kin Email</label>
            <input name="next_of_kin_email" type="email" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label for="location">Next of Kin Location</label>
            <input name="next_of_kin_location" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <button class="btn btn-primary sm" type="submit">Submit</button>
        </div>
    </form>
</div>
@endsection
