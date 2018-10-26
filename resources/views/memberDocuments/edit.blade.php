@extends('layouts.official')
@section('content')
<div class="container">
  <form action="/documents/{{$memberDocument->id}}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <input type="hidden" name="member_id" class="form-control" value="{{$member->id}}">
    <div class="form-group col-md-6">
      <label for="memberName">Member Name</label>
      <input  class="form-control" value="{{$member->member_first_name}} {{$member->member_last_name}}" readOnly>
    </div>
    <div class="form-group col-md-6">
      <label for="memberNumber">Member Number</label>
      <input  class="form-control" value="{{$member->member_number}}" readOnly>
    </div>
    <div class="form-group col-md-6">
      <br>
      <label for="memberDocument">Select Document Type</label>
      <select name="document_type_id" class="form-control">
      @foreach($memberdocumenttypes as $memberdocumenttype)
      <option value="{{$memberdocumenttype->id}}">{{$memberdocumenttype->document_type_name}}</option>
      @endforeach
    </div>
    <div class="form-group col-md-6">
      <label for="document">Select document to upload</label>
      <input class="form-control" type="file" name="document_name">
    </div>
    <div class="form-group col-md-6">
    <a href="/documents" class="btn btn-primary">Go Back</a>
      <input class="btn btn-primary sm" name="update" value="Upload Document" type="submit">
    </div>
  </form>
</div>
@endsection
