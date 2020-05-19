<?php

namespace App\Console\Commands;

use App\WelcomeEmail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return mixed
     */
    public function handle()
    {

        $users = DB::table('users')
            ->leftJoin('welcome_emails', 'user_id', '=', 'users.id')
            ->whereNull('welcome_emails.id')
            ->select('users.id', 'users.email', 'users.name')
            ->get();

        foreach ($users as $user)
        {
            $data = ['email' => $user->email, 'name' => $user->name];

            Mail::send('emails.welcome', $data, function ($message) use ($user){
                $message->subject('Welcome to Skrap');
                $message->from('info@thechecker.org', 'Welcome to Skrap');
                $message->to($user->email);
            });

            $welcomeEmail = new WelcomeEmail();
            $welcomeEmail->user_id = $user->id;
            $welcomeEmail->template = 'emails.welcome';
            $welcomeEmail->to = $user->email;
            $welcomeEmail->subject = 'Welcome to Skrap';
            $welcomeEmail->save();
        }
    }
}
