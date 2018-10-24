@extends('layouts.master')

@section('content')
<div class="container">
    <form action="/roles" method="POST">
        @csrf
        <div class="form-group col-md-6">
            <br>
            <label for="roleName">Role Name</label>
            <input class="form-control" type="text" name="role_name">
        </div>
        <div class="form-group col-md-6">
            <label for="rolestatus"> Role Status</label>
            <select name="role_status" class="form-control">
                <option value="">Select role status</option>
                <option value="1">Active</option>
                <option value="0">InActive</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <button class="btn btn-primary sm" type="submit">Submit</button>
        </div>
    </form>
</div>
@endsection
