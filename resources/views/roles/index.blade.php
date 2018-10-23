
@extends('layouts.master')

@section('content')
<div class="container">
    <br>
    <table class="table table-bordered table-condensed table-striped table-hover">
        <tr>
            <th>Id</th>
            <th>Role Name</th>
            <th>Role Status</th>
            <th>Deleted</th>
            <th>Deleted by</th>
            <th>Deleted on</th>
            <th>Created by</th>
            <th>Created at</th>
            <th colspan="2">Actions</th>

        </tr>
        @foreach($roles as $role)
        <tr>
            <td>{{$role->id}}</td>
            <td>{{$role->role_name}}</td>
            @if($role->role_status == 0)
                <td style="color:red;">InActive</td>
            @endif
            @if($role->role_status == 1)
                <td style="color:green;">Active</td>
            @endif
            @if($role->deleted == 0)
                <td style="color:green;">Not Deleted</td>
            @endif
            @if($role->deleted == 1)
                <td style="color:red;">Deleted</td>
            @endif
            @if($role->deleted_by == NULL || "")
                <td>-</td>
            @endif
            @if($role->deleted_on == NULL || "")
                <td>-</td>
            @endif
            <td>{{Auth::user()->user_first_name}}</td>
            @if($role->created_at == NULL || "")
                <td>-</td>
            @endif
            @if($role->created_at != NULL)
                <td>{{$role->created_at}}</td>
            @endif
            <td>
                <button class="btn btn-success">Edit</button>
                <button class="btn btn-danger">Delete</button>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection

