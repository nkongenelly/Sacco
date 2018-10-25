
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
               <th>Document Name </th>
               <th>Deleted</th>
               <th>Deleted by</th>
               <th>Deleted on</th>
               <th>Created by</th>
               <th>Created at</th>
           <th colspan="4" style="text-align:center"> Actions</th>

       </tr>
       @foreach($memberDocuments as $memberDocument)
  <tr>
     <td>{{ $memberDocument->id }}</td>
 
     
     <td>{{ $memberDocument->document_name }}</td>
     <td>
        @if($memberDocument->created_at)
        {{ $memberDocument->created_at->toFormattedDateString() }}
        @else
        {{ $memberDocument->created_at }}
        @endif
     </td>
     <td>
        @if($memberDocument->created_at)
        {{ $memberDocument->updated_at->toFormattedDateString() }}
        @else
        {{ $memberDocument->created_at }}
        @endif
     </td>
     <td>
        @if( $memberDocument->deleted==1 )
        <font size="3" color="red">deleted</font>
        @else()
        Not deleted
        @endif
     </td>
     <td>
     @if($memberDocument->deleted_on != null)
     {{ $memberDocument->deleted_on }}
     @else
     -
     @endif
     </td>
     <td>
        {{$memberDocument->deleted_by}}
       
     </td>
     <td><a href ="/documents/edit/{{$memberDocument->id}}" class="btn btn-sm btn-primary">edit</a></td>
     <td>
        <a href="/documents/delete/{{$memberDocument->id}}"  onclick=" return confirm ('are you sure you want to delete')" class="btn btn-sm btn-danger">Delete</a>
     </td>
  </tr>
  @endforeach
</table>


      </div>
   <div>
     
@endsection

