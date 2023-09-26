<?php

namespace App\Listeners;

use App\Events\AlertCourse;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AlertCourse
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(AlertCourse $event): void
    {
        //
    }
}
