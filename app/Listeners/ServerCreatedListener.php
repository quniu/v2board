<?php

namespace App\Listeners;

use App\Events\ServerCreatedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Redis;

class ServerCreatedListener
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
     * @param  ServerCreatedEvent  $event
     * @return void
     */
    public function handle(ServerCreatedEvent $event) {
    }
}