<?php

namespace App\Http\Controllers\Web\Admin;

use App\Models\User;
use App\Models\Email;
use App\Jobs\SendEmailJob;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::whereHas('roles', function($q){
            $q->where('name', 'user');
        })->get();
        return view('web.admin.mail.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=User::where('id',$request->user)->first();
        Email::create([
            'user_id'=>$request->user,
            'title'=>$request->title,
            'topic'=>$request->topic,
            'time'=>$request->time,
        ]);

        $details=[
            'email'=>$user->email,
            'title'=>$request->title,
            'topic'=>$request->topic,
        ] ;
        dispatch(new SendEmailJob($details));
        return back()->with('success','created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
