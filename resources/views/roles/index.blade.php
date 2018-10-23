
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
            @else()
            <td>{{Auth::user()->user_first_name}}</td>
            @endif
            @if($role->deleted_on == NULL || "")
                <td>-</td>
            @else()
            <td>{{$role->deleted_on}}</td>
            @endif
            <td>{{Auth::user()->user_first_name}}</td>
            @if($role->created_at == NULL || "")
                <td>-</td>
            @endif
            @if($role->created_at != NULL)
                <td>{{$role->created_at->toFormattedDateString()}}</td>
            @endif
            <td>
                <form action="/roles/{{$role->id}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <a href="/roles/edit/{{$role->id}}" class="btn btn-success">Edit</a>
                @if(($role->role_name == 'Admin') || ($role->role_name == 'Official'))
                <button class="btn btn-danger" style="cursor:not-allowed;" disabled>Delete</button>
                @else()
                <button class="btn btn-danger">Delete</button>
                @endif
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection

