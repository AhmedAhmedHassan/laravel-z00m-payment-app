@extends('layouts.admin')
@section('title','Email')

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Schedule Email Form</h4>
    </div>
    <div class="card-body">
        <form class="form form-horizontal" method="post" action="{{route('admin.email.store')}}">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-1 row">
                        <div class="col-sm-3">
                            <label class="col-form-label" for="time">select user</label>
                        </div>
                        <div class="col-sm-9">
                            <select name="user" id="user" class="form-control select2">
                                @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->email}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-1 row">
                        <div class="col-sm-3">
                            <label class="col-form-label" for="title">title</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" id="mtitle" class="form-control" name="title" placeholder="email title">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-1 row">
                        <div class="col-sm-3">
                            <label class="col-form-label" for="topic">topic</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" id="topic" class="form-control" name="topic" placeholder="email topic">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-1 row">
                        <div class="col-sm-3">
                            <label class="col-form-label" for="time">Schedule time</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="datetime-local" id="time" class="form-control" name="time">
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 offset-sm-3">
                    <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">Submit</button>
                    <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection