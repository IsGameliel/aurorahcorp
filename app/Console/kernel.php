<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        // Add your custom commands here
        \App\Console\Commands\ApplyInterest::class,
    ];

    protected function schedule(Schedule $schedule)
    {
        // Schedule the interest:apply command to run every 5 minutes
        $schedule->command('interest:apply')->everyFiveMinutes();
    }

    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
