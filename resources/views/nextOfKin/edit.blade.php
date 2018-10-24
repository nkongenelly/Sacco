@extends('layouts.master')
@section('content')
<div class="container">
   <div class="row justify-content-left">
      <div class="col-md-8">
         <div class="card">
            <form method="POST" action="/nextofkin/{{$nextOfKins->id}}">
               {{ csrf_field() }}
               {{ method_field('PATCH') }}
               <div class="form-group" >
                  <label for="title">First Name</label>
                  <input type="text" class="form-control" name="next_of_kin_first_name"  value="{{$nextOfKins->next_of_kin_first_name}}">
               </div>
               <div class="form-group" >
                  <label for="title">Last Name</label>
                  <input type="text" class="form-control" name="next_of_kin_last_name"  value="{{$nextOfKins->next_of_kin_last_name}}">
               </div>
               <div class="form-group" >
                  <label for="title">Email</label>
                  <input type="text" class="form-control" name="next_of_kin_email"  value="{{$nextOfKins->next_of_kin_email}}">
               </div>
               <div class="form-group" >
                  <label for="title">Phone Number</label>
                  <input type="text" class="form-control" name="next_of_kin_phone_number"  value="{{$nextOfKins->next_of_kin_phone_number}}">
               </div>
               <div class="form-group" >
                  <label for="title">National ID Number</label>
                  <input type="text" class="form-control" name="next_of_kin_national_id"  value="{{$nextOfKins->next_of_kin_national_id}}">
               </div>
               <div class="form-group" >
                  <label>select status</label>
                  <select name="next_of_kin_status" class="form-control">
                     <option value="{{$nextOfKins->next_of_kin_status}}">select status</option>
                     <option value="1">Active</option>
                     <option value="0">In active</option>
                  </select>
               </div>
               <a href="nextofkin" class="btn btn-primary">Go Back</a>
               <button type="submit" class="btn btn-primary">update</button>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection