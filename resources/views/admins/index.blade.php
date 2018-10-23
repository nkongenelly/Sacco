

@extends('layouts.master')
@section('content')
<a href="/adduser"  class="btn btn-primary">create</a>
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
     
      <th colspan="4">Actions</th>
   </tr>
   @foreach($users as $user)
   <tr>
      <td>{{ $user->id }}</td>
      <td>{{ $user->user_first_name }} </td>
      <td>{{ $user->user_last_name }} </td>
      <td>{{ $user->email }}</td>
     <td> @if( $user->user_status==1)
     <font size="3" color="blue">Active</font>
    @else()
    <font size="3" color="red">InActive</font>
    @endif
    </td>
       <td>
       @if($user->created_at)
       {{ $user->created_at->toFormattedDateString() }}
       @else
       {{ $user->created_at }}
       @endif
       </td>
       <td>
       @if($user->created_at)
       {{ $user->updated_at->toFormattedDateString() }}
       @else
       {{ $user->created_at }}
       @endif
       </td>
       
       <td>
       @if( $user->deleted==1 )
       <font size="3" color="red">deleted</font>
       @else()
       Not deleted
       @endif
       </td>
       <td>{{ $user->deleted_on }}</td>

       <td>
       
       @foreach($users as $item)
       @if($item->id==$user->deleted_by)
       {{$item->user_first_name}}
       @endif
       @endforeach
       
       </td>
     
      <td><a href="/" class="btn btn-sm btn-success">Asign role</a></td>
      <td><a href ="/users/edit/{{$user->id}}" class="btn btn-sm btn-primary">edit</a></td>
     
      <td>
      @if(Auth::user()->id != $user->id)
      <form action="/usersdelete/{{$user->id}}" method="post" onsubmit()="are you sure you want to delete">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <button class="btn btn-sm btn-danger"  type="submit">delete</button>
      </form>
      @endif
      </td>
   </tr>
   @endforeach
</table>



@endsection

