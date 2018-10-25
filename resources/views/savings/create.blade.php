@extends('layouts.official')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4>Create Savings</h4>
                        <form class="form-horizontal" action="/savings/create" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" value="{{Auth::user()->id}}" name="user_id"/>
                            <div class="form-group">
                                <label for="member">Member name</label>
                                <select class="form-control" name="member_id">
                                    <option selected>Search member...</option>
                                    @foreach($members as $member)
                                        <option value="{{$member->id}}">
                                            {{$member->member_first_name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="savingtype">Saving type</label>
                                <select class="form-control" name="saving_type_id">
                                    <option selected>Choose type...</option>
                                    @foreach($saving_types as $saving_type)
                                        <option value="{{$saving_type->id}}">
                                            {{$saving_type->savings_type_name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="name">Saving amount</label>
                                <input type="number" class="form-control" name="saving_amount" placeholder="put amount...">
                            </div>

                            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>        
        </div>
    </div>
@endsection