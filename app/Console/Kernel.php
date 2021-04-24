<?php

namespace App\Console;

use App\Program;
use Carbon\Carbon;
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
        // $schedule->command('inspire')
        //          ->hourly();
        $schedule->call(function () {
            // $today = Carbon::today();
            // $programs = Program::whereDate('event_date',$today->addDays(7) )->get();
            // if($today->addDays(7));
            //check todays date and check if 7days time service is in database, if not add it,
        })->weekly()->wednesdays();

        $schedule->call(function () {
            //check todays date and check if 7days time service is in database, if not add it.
        })->weekly()->sundays();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
