@extends('layouts.admin')
@section('title','Home')

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Horizontal Form</h4>
    </div>
    <div class="card-body">
        <form class="form form-horizontal" method="post" action="{{route('admin.meeting.store')}}">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-1 row">
                        <div class="col-sm-3">
                            <label class="col-form-label" for="mtitle">title</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" id="mtitle" class="form-control" name="mtitle" placeholder="meeting title">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-1 row">
                        <div class="col-sm-3">
                            <label class="col-form-label" for="mtopic">topic</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" id="mtopic" class="form-control" name="mtopic" placeholder="meeting topic">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-1 row">
                        <div class="col-sm-3">
                            <label class="col-form-label" for="mduration">duration</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="number" id="mduration" class="form-control" name="mduration" placeholder="duration">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-1 row">
                        <div class="col-sm-3">
                            <label class="col-form-label" for="mstartdate">start date</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="date" id="mstartdate" class="form-control" name="mstartdate" placeholder="start date">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-1 row">
                        <div class="col-sm-3">
                            <label class="col-form-label" for="mstarttime">start time</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="time" id="mstarttime" class="form-control" name="mstarttime" placeholder="start time">
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