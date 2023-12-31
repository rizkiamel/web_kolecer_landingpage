<?php

namespace App\Listeners;

use App\Notifications\OffersNotification;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class SendNewUserNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        /***
         * $admins = User::where('role', 'admin')->get();

        Notification::send($admins, new OffersNotification($event->user));
         * 
         */
        
    }
}
