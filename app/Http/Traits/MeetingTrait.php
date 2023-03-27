<?php
namespace App\Http\Traits;

use App\Models\Meeting;
use MacsiDigital\Zoom\Facades\Zoom;

trait MeetingTrait
{
    public function createMeeting($request)
    {
        $zoom_user = Zoom::user()->find('communicationeng95@gmail.com');
        $mpassword=Meeting::generatePassword();
        $meeting_data=[
            'topic'=>$request->mtitle,
            'duration'=>$request->mduration,
            'start_time'=>$request->mstarttime,
            'password'=>$mpassword,
            'time_zone'=>'Africa/Cairo'
        ];

        $meeting = Zoom::meeting()->make($meeting_data);

        // $meeting->recurrence()->make([
        //     'type' => 2,
        //     'repeat_interval' => 1,
        //     'weekly_days' => 2,
        //     'end_times' => 5
        //   ]);

        $meeting->settings()->make([
            "join_before_host" => false,
            "host_video" => false,
            "participant_video" => false,
            "mute_upon_entry" => true,
            "approval_type" => 2,
            'waiting_room' => false,
        ]);

        return $zoom_user->meetings()->save($meeting);
    }
}