

@extends('layout')
@section('content')
<a href="/products/create"  class="btn btn-primary">create</a>
<table class="table table-condensed table-striped table-bordered table-hover">
   <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last name</th>
      <th>Email</th>
      <th>User Status</th>
      <th>created at</th>
      <th>Updated at</th>
      <th>deleted</th>
      <th>deleted On</th>
      <th>deleted by</th>
     
      <th colspan="2">Actions</th>
   </tr>
   @foreach($users as $user)
   <tr>
      <td>{{ $user->id }}</td>
      <td>{{ $user->user_first_name }} </td>
      <td>{{ $product->user_last_name }} </td>
      <td>{{ $user->email }}</td>
       <td>{{ $user->user_status }}</td>
       <td>{{ $user->created_at }}</td>
       <td>{{ $user->ipdated_at }}</td>
       <td>{{ $user->deleted }}</td>
       <td>{{ $user->deleted_on }}</td>
       <td>{{ $user->deleted_by }}</td>
      <td>{{ $product->created_at->toFormattedDateString() }}</td>
      <td><a href="" class="btn btn-sm btn-success">Asign role</a></td>
      <td><a href ="" class="btn btn-sm btn-primary">edit</a></td>
      {{ csrf_field() }}
      {{ method_field('DELETE') }}
      <td><a href="" class="btn btn-sm btn-danger"  onclick()="are you sure you want to delete">delete</a></td>
   </tr>
   @endforeach
</table>



@endsection

