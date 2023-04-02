<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class ScheduleEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This comand to schedule emails and send it to users';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $users = User::all();
        foreach ($users as $user)
        {
            Mail::raw("This is automatically generated Hourly Update", function($message) use ($user)
            {
                $message->from('laravel@gmail.com');
                $message->to($user->email)->subject('Hourly Update');
            });
        }
        $this->info('Hourly Update has been send successfully');
    }
}
