@extends('layouts.official')

 @section('content')
 <div class="container">
    <br>
     <table class="table table-bordered table-condensed table-striped table-hover">
         <tr>
            <th>Id</th>
            <th>Member Name</th>
            <th>Saving Type</th>
            <th>Saving Amount</th>
            <th>Saving Date</th>
            <th>Deleted</th>
            <th>Deleted on</th>
            <th>Deleted by</th>
            <th>Created by</th>
            <th>Created at</th>
            <th>Updated at</th>
          <th colspan="2">Actions</th>
       </tr>
       @foreach ($savings as $saving)
            <tr>
                <td>{{$saving->id}}</td>
                <td>{{$saving->member_id}}</td>
                <td>{{$saving->saving_type_id}}</td>
                <td>{{$saving->saving_amount}}</td>
                <td>{{$saving->saving_date->diffForHumans()}}</td>
                <td>{{$saving->deleted}}</td>
                <td>{{$saving->deleted_on->diffForHumans()}}</td>
                <td>{{$saving->deleted_by}}</td>
                <td>{{$saving->created_by}}</td>
                <td>{{$product->created_at->diffForHumans()}}</td>
                <td>{{$product->updated_at->diffForHumans()}}</td>
                <td><a href="/savings/edit/{{$saving->id}}" class="btn btn-sm btn-primary">Edit</a></td>
                <td><a href="/savings/delete/{{$saving->id}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete Saving?')">Delete</a></td>
            </tr>
        @endforeach
      
 @endsection