<?php

namespace App\Console;

use App\Media;
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
            $today = Carbon::today();
            $nextweek = $today->addDays(7);
            if($today->format('l') == 'Wednesday' || $today->format('l') == 'Sunday' ){
                $programs = Program::whereDate('event_date',$nextweek )->get();
                if($programs->isEmpty()){
                    $program = Program::create(['user_id' => 1,'name' => $today->format('l').' Service'  ,'description' => $today->format('l').' Service','event_date'=> $nextweek]);
                    $media = Media::create(['name'=> 'service.jpg','format'=> 'image','mediable_id'=> $program->id,'mediable_type'=> 'App\Program']);
        
                }
            }
        })->daily();
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
