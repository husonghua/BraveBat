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
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('horizon:snapshot')->hourly();
        $schedule->command('import:transparency')->daily();

        $schedule->command('backfill:website')->dailyAt("10:41"); // 5000
        $schedule->command('backfill:twitter')->dailyAt("10:42"); // 10000
        $schedule->command('backfill:vimeo')->dailyAt("10:43"); // 10000
        $schedule->command('backfill:twitch')->dailyAt("10:44"); // 10000
        $schedule->command('backfill:github')->dailyAt("10:45"); // 10000

        // $schedule->command('import:creator')->dailyAt("00:01");
        $schedule->command('backfill:youtube')->dailyAt("11:00"); // 20

        // $schedule->command('creator:rank')->dailyAt("18:35");
        // $schedule->command('sitemap:generate')->daily();
        // $schedule->command('telescope:prune')->daily();

    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
