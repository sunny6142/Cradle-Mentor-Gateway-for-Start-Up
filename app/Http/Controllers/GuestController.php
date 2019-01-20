<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
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

class GuestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */  
    public function __construct()
    {
    //    $this->middleware('auth:admin');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('contact');
    }
    public function welcome()
    {
        $mentor= DB::table('admins')
        ->where('roll', '=', 2)->limit(10)->get();
        
        return view('welcome',compact('mentor'));
    
    }
      public function status()
    {
         $status = true;
         $msg = "Time solt has been assigned to the StartUp";
         
        return view('admin_success_status', compact('status','msg'));
    }
    
    
    public function mentordetail($id)
    {
      /*  $professional_expertise  = DB::table('professional_expertise')->get();
        $industry_vertical_experience = DB::table('industry_vertical_experience')->orderBy('industry_experience', 'ASC')->get();
        $areas_of_business_and_management_competence  = DB::table('areas_of_business_and_management_competence')->get();
        $gender    = DB::table('gender')->get();
        $mentor= DB::table('admins')
        ->where('roll', '=', 2)->paginate(25);
        
        return view('mentor_detail',compact('mentor','professional_expertise','industry_vertical_experience','areas_of_business_and_management_competence','gender'));
        */
        $mentor  = DB::table('admins')
                    ->leftJoin('professional_expertise', 'admins.professional_expertise', '=', 'professional_expertise.id')
                    ->leftJoin('industry_vertical_experience', 'admins.industry_vertical_experience', '=', 'industry_vertical_experience.id')
                    ->leftJoin('areas_of_business_and_management_competence', 'admins.areas_of_business_and_management_competence', '=', 'areas_of_business_and_management_competence.id')
          
                    ->where(['admins.id' => $id])
                    ->first();
                    
           //         dump($mentor);
         return view('mentor_info',compact('mentor'));
    }
    public function mentorslist()
    {
        $mentor= DB::table('admins')
        ->where('roll', '=', 2)->paginate(25);
        
        
        return view('mentors',compact('mentor'));
        //return view('mentors');
    }
    
    public function contactPost(Request $request)
    {
          //   return Redirect::back()->withErrors(['We were ran in an error try again later']);
           // dump($request->all());
        
            $v = ['name' => $request->username, 'email' => $request->email,
                    
                    'message' => $request->message,
                'created_at' => Carbon::now()];

            DB::table('contact')->insert($v);
            
//dump($Startup);
            $msg = '<body style="padding:5px">Dear'.$request->username.',
                                      <br><br>We will contact you soon
                                      <br>
                                      <br>
                                      Your message: '. $request->message.',<br><br><br>

                                      Support,<br>
                                      <a href="www.mentorgateway.com" target="_blank"> www.mentorgateway.com </a> <br>
                                      <a href="admin-mentorgateway@cradle-edii.in" target="_top"> admin-mentorgateway@cradle-edii.in </a> <br>
                                      <a href="tel:9825013774">+91 98250 13774</a><br>                
                    </body>';
            //$mentor[0]->email
            $from = 'info@mentorgateway.com';
            $to = $request->email; //info@mentorgateway.com
            $subject = "Auto generated message";
            $headers = "From: " . strip_tags($from) . "\r\n";
            $headers .= "Reply-To: ". strip_tags($from) . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            mail($to, $subject, $msg, $headers);
            mail('sunny6142@gmail.com', $subject, $msg, $headers );
    
           $status = true;
            $msg = "Dear ". $request->username.", We will get back to you soon.";
             return view('active', compact('status','msg'));
             
       // });
    }
    
    public function subscribe(Request $request)
    {
       // DB::transaction(function() use ($request) {
            
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|unique:subscribers',
            ]);
            if($validator->fails()){
                return response()->json(array('errors'=> $validator->errors()));
            }
        
            $v = ['email' => $request->email,
                'created_at' => Carbon::now()];

            DB::table('subscribers')->insert($v);
            
//dump($Startup);
            $msg = '<body style="padding:5px">Dear user,
                                      <br><br>Thanks for your subscription
                                      <br>
                                      <br>
                                      

                                      Support,<br>
                                      <a href="www.mentorgateway.com" target="_blank"> www.mentorgateway.com </a> <br>
                                      <a href="mailto:admin-mentorgateway@cradle-edii.in" target="_top"> admin-mentorgateway@cradle-edii.in </a> <br>
                                      <a href="tel:9825013774">+91 98250 13774</a><br>                
                    </body>';
            //$mentor[0]->email
            $from = 'info@mentorgateway.com';
            $to = $request->email; //info@mentorgateway.com
            $subject = "Subscription";
            $headers = "From: " . strip_tags($from) . "\r\n";
            $headers .= "Reply-To: ". strip_tags($from) . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            mail($to, $subject, $msg, $headers);
            mail('sunny6142@gmail.com', $subject, $msg, $headers );
    
            return response()->json(array('errors'=> ""));
       // });
    }
    
    public function reset($token)
    {
        return view('auth.passwords.reset',compact('token'));
    }

    public function active($user, $token)
    {
        $status = false;

        $newuser = DB::table('users')
        ->where('id', $user)->get();

        if(!$newuser->isEmpty() && $newuser[0]->active == $token) {
           $status = true;

           DB::table('users')
           ->where('id', $user)
           ->update(['active' => 1]);

           $msg = "Your Account has been successfully activated";
           
           $mentor= DB::table('admins')
            ->where('roll', '=', 2)->limit(10)->get();
            
            return view('welcome',compact('mentor'));
        }

        if(!$newuser->isEmpty() && $newuser[0]->active == 1) {
            $status = true;
            $msg = "Your Account has been successfully activated";
            
            $mentor= DB::table('admins')
            ->where('roll', '=', 2)->limit(10)->get();
            
            return view('welcome',compact('mentor'));
        }

        

        return view('active', compact('status','msg'));
    }

    public function forgetpassword(Request $request)
    {
       // DB::transaction(function() use ($request) {
            
            $user = DB::table('users')->where('email', '=', $request->email)->first();
            
            if($user == null){
                return response()->json(array('errors'=> "User not found"));  
            }

            DB::table('password_resets')->where('email', '=', $request->email)->delete();

            $val = str_replace('/',"",bcrypt($user->id) );
            $v = ['email' => $request->email,
                'token' => $val,
                'created_at' => Carbon::now()];

            DB::table('password_resets')->insert($v);
            
            
            $Startup = DB::table('request_mentor')
                                ->leftJoin('mentors', 'mentors.request_mentor', '=', 'request_mentor.request_mentor_id')
                                ->leftJoin('admins', 'mentors.admins', '=', 'admins.id')
                                ->leftJoin('users', 'request_mentor.user', '=', 'users.id')
                                ->leftJoin('start_up_info','start_up_info.user_id','=', 'users.id')
                                ->leftJoin('professional_expertise', 'request_mentor.professional_expertise', '=', 'professional_expertise.id')
                                ->leftJoin('industry_vertical_experience', 'request_mentor.industry_vertical_experience', '=', 'industry_vertical_experience.id')
                                ->select('start_up_info.*','request_mentor.*','admins.*','professional_expertise.*','industry_vertical_experience.*')
                                
                             //  ->select('request_mentor.*')
                                ->where(['mentors.request_mentor' => $request->request_mentor])
                                ->first();
//dump($Startup);
            $msg = '<body style="padding:5px">Dear Madam/Sir,
                                      <br><br><br>Please follow the link below to reset your password. 
                                      <br>Kindly ignore this email if you did not request a password change,<br>

                                      <br><br>
                                      
                                      <a href="www.mentorgateway.com/reset/'.$val.'" target="_top">'. $val. ' </a> <br>
                                      <br>

                                      Regard,<br>
                                      <a href="www.mentorgateway.com" target="_blank"> www.mentorgateway.com </a> <br>
                                      <a href="mailto:admin-mentorgateway@cradle-edii.in" target="_top"> admin-mentorgateway@cradle-edii.in </a> <br>
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

    function resetuserpassword(Request $request)
    {
        DB::transaction(function() use ($request) {

            $user = DB::table('password_resets')->where('token', '=', $request->token)->first();
            
            if($user == null) {
                return response()->json(array('errors'=> "User not found"));  
            }
            else{
                DB::table('password_resets')->where('token', '=', $request->token)->delete();
                
                DB::table('users')
                    ->where('email', $user->email)
                    ->update(['password' => bcrypt($request->email)]);

                dump($request->email);
            }
               
        });     
    }

    

}
