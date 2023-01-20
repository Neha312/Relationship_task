<?php

namespace App\Listeners;

use App\Models\User;
use App\Mail\UserMail;
use App\Mail\UserEmail;
use App\Events\PostCreated;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyUser
{

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\PostCreated  $event
     * @return void
     */
    public function handle(PostCreated $event)
    {
        $users = User::get();
        foreach ($users as $user) {
            // $user = User::findOrFail(1);
            Mail::to($user->email)->send(new UserEmail($event->name));
        }
    }
}
