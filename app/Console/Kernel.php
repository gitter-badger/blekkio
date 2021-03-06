<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \App\Console\Commands\HarvestYoutube::class,
        \App\Console\Commands\GenerateFeed::class,
        \App\Console\Commands\GenerateVortexHtml::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('generate:vortex')
            ->everyThirtyMinutes()
            ->weekdays()
            ->between('12:00', '20:00');
    }
}
