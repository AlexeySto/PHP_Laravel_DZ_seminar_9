<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Log;
use App\Events\NewsHidden;

class NewsHiddenListener
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
    public function handle(NewsHidden $event): void
    {
        Log::info('News ' . $event->news->id . ' hidden');
    }
}
