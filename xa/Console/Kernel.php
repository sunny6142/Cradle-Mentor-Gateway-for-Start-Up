<?php

namespace App\Console;
use Illuminate\Support\Facades\DB;
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

        $val = 41;

         $schedule->call(function () use ($val) {
                
                $val = $val+1;
            DB::table('users')
                ->where('id', 1)
                ->update(['roll' => $val]); 

            $status = DB::table('mentors')        
                    ->where(['request_mentor' => $id])
                    ->where('created_at','>=',Carbon::now()->subDay())
                    ->first();
                    
                    $val = $val+1;
                  //send mail
                    $msg = '<body style="padding:5px">Date '.Carbon::now()->toDateTimeString().',
                                          <br><br><br> Greetings from team mentorgateway.<br> 
                                      <br>Based on your mentoring requirement, we have identified one mentor with expertise matching your requirement.,<br>
                                            Kindly login to our portal to know about mentor and available time & date for the mentoring session.
                                      <br>

                                    Request you to login to our portal and initiate further action.<br>
                                        Link <a href="www.mentorgateway.com" target="_blank"> mentorgateway</a> <br>.
                                      <br><br>
                                        Regards,<br>
                                        Team Mentorgateway<br>
                                      <a href="www.mentorgateway.com" target="_blank"> www.mentorgateway.com </a> <br>
                                      <a href="mailto:info@mentorgateway.com" target="_top"> info@mentorgateway.com </a> <br>
                                      <a href="tel:9825013774">+91 98250 13774</a><br>                
                    </body>';
            //$mentor[0]->email
            $from = 'info@mentorgateway.com';
            $to = $Startup->email; //info@mentorgateway.com
            $subject = "Mentor suggested based on your mentoring request";
            $headers = "From: " . strip_tags($from) . "\r\n";
            $headers .= "Reply-To: ". strip_tags($from) . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            mail($to, $subject, $msg, $headers);

            mail('sunny6142@gmail.com', $subject, $msg, $headers );


        })->everyMinute();
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
