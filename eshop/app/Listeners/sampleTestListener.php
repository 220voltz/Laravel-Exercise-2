<?php

namespace App\Listeners;

use App\Events\sampleTestEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class sampleTestListener
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
     * @param  sampleTestEvent  $event
     * @return void
     */
    public function handle(sampleTestEvent $event)
    {
        //
    }
}
