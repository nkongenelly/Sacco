@extends('layouts.master')
@section('content')
<a href="/addexpense"  class="btn btn-primary">create</a>
<table class="table table-condensed table-striped table-bordered table-hover">
   <tr>
      <th>#</th>
      <th>Expense Name</th>
      <th>Expense type</th>
      <th>created at</th>
      <th>Updated at</th>
      <th>deleted</th>
      <th>deleted On</th>
      <th>deleted by</th>
      <th colspan="4">Actions</th>
   </tr>
   @foreach($expenses as $expense)
   <tr>
      <td>{{ $expense->id }}</td>
      <td>{{ $expense->expense_name }} </td>
      <td>{{ $expense->expense_type_id }} </td>
     <td>
         @if($expense->created_at)
         {{ $expense->created_at->toFormattedDateString() }}
         @else
         ___
         @endif
      </td>
      <td>
         @if($expense->created_at)
         {{ $expense->updated_at->toFormattedDateString() }}
         @else
         ___
         @endif
      </td>
      <td>
         @if( $expense->deleted==1 )
         <font size="3" color="red">deleted</font>
         @else()
         ___
         @endif
      </td>
      <td>{{ $expense->deleted_on }}</td>
      <td>
         @foreach($users as $item)
         @if($item->id==$user->deleted_by)
         {{$item->user_first_name}}
         @elseif($user->deleted_by== null)
         _
         @endif
         @endforeach
      </td>
      @if($expense->deleted_on ==0 || Auth::user()->id)
      <td><!-- Button trigger modal -->
       <td><a href ="/users/edit/{{$user->id}}" class="btn btn-sm btn-primary">edit</a></td>
      <td>
         <form action="/usersdelete/{{$user->id}}" method="post" onsubmit()="are you sure you want to delete">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <button class="btn btn-sm btn-danger"  type="submit">delete</button>
         </form>
      </td>
      @elseif($expense->deleted_on ==1)
      <td><button type="disabled">deleted</button></td>
      <td><button type="disabled">deleted</button></td>
      @endif
   </tr>
   @endforeach
</table>
@endsection
