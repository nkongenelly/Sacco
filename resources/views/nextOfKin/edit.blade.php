@extends('layouts.official')
@section('content')
<div class="container">
   <div class="row justify-content-left">
      <div class="col-md-8">
         <div class="card">
            <form method="POST" action="/nextOfKin/{{$nextOfKin->id}}">
               {{ csrf_field() }}
               {{ method_field('PATCH') }}
               <div class="form-group" >
                  <label for="title">First Name</label>
                  <input type="text" class="form-control" name="next_of_kin_first_name"  value="{{$nextOfKin->next_of_kin_first_name}}">
               </div>
               <div class="form-group" >
                  <label for="title">Last Name</label>
                  <input type="text" class="form-control" name="next_of_kin_last_name"  value="{{$nextOfKin->next_of_kin_last_name}}">
               </div>
               <div class="form-group" >
                  <label for="title">Email</label>
                  <input type="text" class="form-control" name="next_of_kin_email"  value="{{$nextOfKin->next_of_kin_email}}">
               </div>
               <div class="form-group" >
                  <label for="title">Phone Number</label>
                  <input type="text" class="form-control" name="next_of_kin_phone_number"  value="{{$nextOfKin->next_of_kin_phone_number}}">
               </div>
               <div class="form-group" >
                  <label for="title">National ID Number</label>
                  <input type="text" class="form-control" name="next_of_kin_national_id"  value="{{$nextOfKin->next_of_kin_national_id}}">
               </div>
               <div class="form-group" >
                  <label for="title">Location</label>
                  <input type="text" class="form-control" name="next_of_kin_location"  value="{{$nextOfKin->next_of_kin_location}}">
               </div>
               <a href="nextofkin" class="btn btn-warning">Go Back</a>
               <button type="submit" class="btn btn-primary">Update</button>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection