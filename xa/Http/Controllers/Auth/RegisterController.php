<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;
use Session;
use Validator;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    public function reg(Request $request) {
     //   dump($request);
    //    Session::put('last_auth_attempt', 'register');

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:6|max:15|confirmed'
        ]);
        if($validator->fails()){
            return response()->json(array('errors'=> $validator->errors()));
        }
        else{
           // DB::transaction(function() use ($request) {
            
            $val = str_replace('/',"",bcrypt($request->password) );

                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'active' => $val,
                ]); 


                $msg = '<body style="padding:5px">Dear '.$request->name.',
                                          <br><br><br> Thank you for signing up with mentorgateway. 
                                          <br>Kindly find below the brief about it,<br><br>

                                            Click below link to Activate your account.<br>
                                             <a href="www.mentorgateway.com/active/'.$user->id.'/'.$val.'" target="_blank"> '.$val.' </a> <br>
                                          <br><br>
                                            Regards,<br>
                                            Team Mentorgateway<br>
                                          <a href="www.mentorgateway.com" target="_blank"> www.mentorgateway.com </a> <br>
                                          <a href="mailto:info@mentorgateway.com" target="_top"> info@mentorgateway.com </a> <br>
                                          <a href="tel:9825013774">+91 98250 13774</a><br>                
                        </body>';
                //$mentor[0]->email
                $from = 'info@mentorgateway.com';
                $to = $request->email; //info@mentorgateway.com
                $subject = "Thanking for Using Mentorgateway";
                $headers = "From: " . strip_tags($from) . "\r\n";
                $headers .= "Reply-To: ". strip_tags($from) . "\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

                @mail($to, $subject, $msg, $headers);

            //    Auth::login($user,$request->remember);

                  
                return;
           // });
        }
        return response()->json(array('errors'=> "Unknown error! please try again"));      
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
