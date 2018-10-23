@extends('layouts.master')
@section('content')
<div class="container">
   <div class="row justify-content-left">
      <div class="col-md-8">
         <div class="card">
            <form method="POST" action="/users/{{$users->id}}">
               {{ csrf_field() }}
               {{ method_field('PATCH') }}
               <div class="form-group" >
                  <label for="title">First Name</label>
                  <input type="text" class="form-control" name="user_first_name"  value="{{$users->user_first_name}}">
               </div>
               <div class="form-group" >
                  <label for="title">Last Name</label>
                  <input type="text" class="form-control" name="user_last_name"  value="{{$users->user_last_name}}">
               </div>
               <div class="form-group" >
                  <label for="title">Email</label>
                  <input type="text" class="form-control" name="email"  value="{{$users->email}}">
               </div>
               <div class="form-group" >
                  <label>select status</label>
                  <select name="user_status" class="form-control">
                     <option value="{{$users->user_status}}">select status</option>
                     <option value="1">Active</option>
                     <option value="0">In active</option>
                  </select>
               </div>
               <a href="/users" class="btn btn-primary">Go Back</a>
               <button type="submit" class="btn btn-primary">update</button>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection