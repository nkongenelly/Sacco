@extends('layouts.master')

@section('content')
<div class="container">
    <form action="/roles/{{$role->id}}" method="POST">
        {{csrf_field() }}
        {{method_field('PATCH') }}
        <div class="form-group col-md-6">
            <br>
            <label for="roleName">Role Name</label>
            <input class="form-control" type="text" name="role_name" value="{{$role->role_name}}">
        </div>
        <div class="form-group col-md-6">
            <label for="rolestatus"> Role Status</label>
            <select name="role_status" class="form-control" value="{{$role->role_status}}">
                <option value="">Select role status</option>
                <option value="1">Active</option>
                <option value="0">InActive</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <button class="btn btn-primary sm" type="submit">Update</button>
            <a class="btn btn-primary sm" href="/roles">Back</a>
        </div>
    </form>
</div>
@endsection
