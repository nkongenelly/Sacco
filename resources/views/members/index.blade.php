
@extends('layouts.official')

 @section('content')
 <div class="container">
    <div class="table-responsive"> 
        <br>
        <table class="table table-bordered table-condensed table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Member Number</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>ID Number</th>
                <th>Phone Number </th>
                <th>Bank Account Number</th>
                <th>Postal Address</th>
                <th>Postal Code</th>
                <th>Payroll Number</th>
                <th>Deleted</th>
                <th>Deleted by</th>
                <th>Deleted on</th>
                <th>Created by</th>
                <th>Created at</th>
            <th colspan="4" style="text-align:center"> Actions</th>

        </tr>
        @foreach($members as $member)
   <tr>
      <td>{{ $member->id }}</td>
      <td>{{ $member->member_number}} </td>
      <td>{{ $member->member_first_name }} </td>
      <td>{{ $member->member_last_name }}</td>
      <td>{{ $member->member_national_id }}</td>
      <td>{{ $member->member_phone_number }}</td>
      <td>{{ $member->member_bank_account_number }}</td>
      <td>{{ $member->member_postal_address }}</td>
      <td>{{ $member->member_postal_code }}</td>
      <td>{{ $member->member_payroll_number }}</td>
      <td>
         @if($member->created_at)
         {{ $member->created_at->toFormattedDateString() }}
         @else
         {{ $member->created_at }}
         @endif
      </td>
      <td>
         @if($member->created_at)
         {{ $member->updated_at->toFormattedDateString() }}
         @else
         {{ $member->created_at }}
         @endif
      </td>
      <td>
         @if( $member->deleted==1 )
         <font size="3" color="red">deleted</font>
         @else()
         Not deleted
         @endif
      </td>
      <td>
      @if($member->deleted_on != null)
      {{ $member->deleted_on }}
      @else
      -
      @endif
      </td>
      <td>
         {{$member->deleted_by}}
        
      </td>
      <td><a href ="/nextofkin/create/{{$member->id}}" class="btn btn-sm btn-primary">Add Next of Kin</a></td>
      <td><a href ="documents/create/{{$member->id}}" class="btn btn-sm btn-primary">Add Member Document</a></td>
      <td><a href ="/members/edit/{{$member->id}}" class="btn btn-sm btn-primary">edit</a></td>
      <td>
         <a href="/members/delete/{{$member->id}}"  onclick=" return confirm ('are you sure you want to delete')" class="btn btn-sm btn-danger">Delete</a>
      </td>
   </tr>
   @endforeach
</table>


       </div>
    <div>
      
 @endsection

