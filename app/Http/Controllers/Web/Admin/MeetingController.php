<?php

namespace App\Http\Controllers\Web\Admin;

use App\Models\Meeting;
use Illuminate\Http\Request;
use App\Http\Traits\MeetingTrait;
use MacsiDigital\Zoom\Facades\Zoom;
use App\Http\Controllers\Controller;

class MeetingController extends Controller
{
    use MeetingTrait;
    public function index(){
        $meetings=Meeting::all();
        return view('web.admin.meetings.index',compact('meetings'));
    }

    public function create(){
        return view('web.admin.meetings.create');
    }

    public function store(Request $request){
        // create meeting in zoom app
        $meeting=$this->createMeeting($request);
        // create meeting in database
        Meeting::create([
            'mtitle'=>$request->mtitle,
            'mtopic'=>$request->mtopic,
            'mstartdate'=>$request->mstartdate,
            'mstarttime'=>$request->mstarttime,
            'mduration'=>$request->mduration,
            'mnumber'=>$meeting->id,
            'password'=>$meeting->password,
            'zoom_account'=>$meeting->host_email
        ]);
        return back()->with('success','meeting created successfully');
    }
}
