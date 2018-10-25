@extends('layouts.official')
@section('content')
<table class="table table-condensed table-striped table-bordered table-hover">
   <tr>
      <th>#</th>
      <th>Member Name</th>
      <th>first name</th>
      <th>Last name</th>
      <th>Email</th>
      <th>Phone number</th>
      <th> Status</th>
      <th>created at</th>
      <th>Updated at</th>
      <th>deleted</th>
      <th>deleted On</th>
      <th>deleted by</th>
      <th colspan="3">Actions</th>
   </tr>
   @foreach($nextOfKins as $nextOfKin)
   <tr>
      <td>{{ $nextOfKin->id }}</td>
      <td>{{ $nextOfKin->member_id }} </td>
      <td>{{ $nextOfKin->next_of_kin_first_name }} </td>
      <td>{{ $nextOfKin->next_of_kin_last_name }}</td>
      <td>{{ $nextOfKin->next_of_kin_email }}</td>
      <td>{{ $nextOfKin->next_of_kin_phone_number }}</td>
      <td> @if($nextOfKin->next_of_kin_status==1)
         <font size="3" color="blue">Active</font>
         @else()
         <font size="3" color="red">InActive</font>
         @endif
      </td>
      <td>
         @if($nextOfKin->created_at)
         {{ $nextOfKin->created_at->toFormattedDateString() }}
         @else
         {{ $nextOfKin->created_at }}
         @endif
      </td>
      <td>
         @if($nextOfKin->created_at)
         {{ $nextOfKin->updated_at->toFormattedDateString() }}
         @else
         {{ $nextOfKin->created_at }}
         @endif
      </td>
      <td>
         @if( $nextOfKin->deleted==1 )
         <font size="3" color="red">deleted</font>
         @else()
         Not deleted
         @endif
      </td>
      <td>
      @if($nextOfKin->deleted_on != null)
      {{ $nextOfKin->deleted_on }}
      @else
      -
      @endif
      </td>
      <td>
         {{$nextOfKin->deleted_by}}
        
      </td>
      
      <td><a href ="/nextOfKin/edit/{{$nextOfKin->id}}" class="btn btn-sm btn-primary">edit</a></td>
      <td>
         <form action="/nextOfKindelete/{{$nextOfKin->id}}" method="post" onsubmit()="are you sure you want to delete">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <button class="btn btn-sm btn-danger"  type="submit">delete</button>
         </form>
      </td>
   </tr>
   @endforeach
</table>
@endsection
