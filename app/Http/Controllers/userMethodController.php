<?php

namespace App\Http\Controllers;

use App\RequestMentor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use response;
use Illuminate\Support\Facades\input;

use App\User;
use App\Admin;
use App\request_mentor;
use App\mentors;
use App\start_up_info;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;

use Auth;
use Session;
use Validator;
use Carbon\Carbon;

class userMethodController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */  
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function userevent()
    {
        $events = DB::table('request_mentor')
        ->leftJoin('mentors', 'mentors.request_mentor', '=', 'request_mentor.request_mentor_id')
     //   ->leftJoin('admins', 'mentors.admins', '=', 'admins.id')
        ->leftJoin('users', 'request_mentor.user', '=', 'users.id')
        ->leftJoin('start_up_info','start_up_info.user_id','=', 'users.id')
        ->leftJoin('day_and_time','day_and_time.request_mentor','=', 'mentors.request_mentor')

        ->select('start_up_info.*','request_mentor.*','day_and_time.*','users.*')
        
     //  ->select('request_mentor.*')
        ->where(['users.id' => Auth::user()->id, 'mentors.mentor_status' =>2, 'mentors.user_status'=>2, 'day_and_time.approval' => 1,])
        ->where('day_and_time.date', '>=', Carbon::yesterday())
        ->orderBy('day_and_time.date', 'ASC')
        ->paginate(25);
        
    //    dump($events);
        
        return view('userevent',compact('events'));
        //return view('mentors');
    }
   

    public function deleteevent(Request $request)
    {
       // DB::transaction(function() use ($request) {
          
            DB::table('mentors')->where('mentors.request_mentor', '=', $request->request_mentor)->delete();
            DB::table('day_and_time')->where('day_and_time.request_mentor', '=', $request->request_mentor)->delete();
            DB::table('request_mentor')
            ->where('request_mentor_id', $request->request_mentor)
            ->update(['request_mentor_status' => 6]);  //cancel by user


            $v = ['request_mentor' => $request->request_mentor,
                'time' => $request->time,
                'date' => $request->date,
                'venue' => $request->venue ];

        //    DB::table('cancelevent')->insert($v);
                
            $msg = '<body style="padding:5px">Dear '.$request->name.',
                                      <br><br><br>Due to some unforeseen and emergent conditions, you are requested to cancel the following mentoring session. 
                                      
                                      <br><br>
                                      
                                      
                                      Mentoring Session Date : '.$request->date.'.<br>
                                      Mentoring Session Time : '.$request->time .'.<br>
                                      Mentoring Session Venue : '.$request->venue .'<br>
                                      Request you to login to portal for further detail.<br>
                                      
                                      <br>
                                      
                                      <a href="www.mentorgateway.com/home/" target="_top"> Home </a> <br>
                                      <br>

                                      Regard,<br>
                                      <a href="www.mentorgateway.com" target="_blank"> www.mentorgateway.com </a> <br>
                                      <a href="mailto:info@mentorgateway.com" target="_top"> info@mentorgateway.com </a> <br>
                                      <a href="tel:9825013774">+91 98250 13774</a><br>                
                    </body>';
            //$mentor[0]->email
            $from = 'info@mentorgateway.com';
            $to = $request->email; //info@mentorgateway.com
            $subject = "Retrieve your password on www.mentorgateway.com";
            $headers = "From: " . strip_tags($from) . "\r\n";
            $headers .= "Reply-To: ". strip_tags($from) . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            mail($to, $subject, $msg, $headers);
            mail('info@mentorgateway.com', $subject, $msg, $headers );
            mail('sunny6142@gmail.com', $subject, $msg, $headers );
    
       // });
    } 

}
