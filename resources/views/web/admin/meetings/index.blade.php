@extends('layouts.admin')
@section('title','Home')

@section('content')
<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <table class="datatables-basic table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>meeting number</th>
                            <th>title</th>
                            <th>topic</th>
                            <th>start date</th>
                            <th>start time</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($meetings as $key=>$meeting)    
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$meeting->mnumber}}</td>
                            <td>{{$meeting->mtitle}}</td>
                            <td>{{$meeting->mtopic}}</td>
                            <td>{{$meeting->mstartdate}}</td>
                            <td>{{$meeting->mstarttime}}</td>
                            <td>{{$meeting->mstatus}}</td>
                            <td>
                                <a href="#" target="_blank" class="btn btn-primary">
                                    Join
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</section>
@endsection