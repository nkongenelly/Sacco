@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create User</div>

                <div class="card-body">
                    <form method="POST" action="/adduser">
                        @csrf
                        <div class="form-group row">
                            <label for="user_first_name" class="col-md-4 col-form-label text-md-right">First Name</label>

                            <div class="col-md-6">
                                <input id="user_first_name" type="text" class="form-control{{ $errors->has('user_first_name') ? ' is-invalid' : '' }}" name="user_first_name" value="{{ old('user_first_name') }}" required autofocus>
                                @if ($errors->has('user_first_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('user_first_name') }}</strong>
                                    </span> 
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="user_last_name" class="col-md-4 col-form-label text-md-right">Last Name</label>

                            <div class="col-md-6">
                                <input id="user_last_name" type="text" class="form-control{{ $errors->has('user_last_name') ? ' is-invalid' : '' }}" name="user_last_name" value="{{ old('user_last_name') }}" required autofocus>
                                @if ($errors->has('user_last_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('user_last_name') }}</strong>
                                    </span> 
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required> 
                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span> 
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection