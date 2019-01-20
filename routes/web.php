<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/test', function () {
   
    $msy = '<body style="padding:5px">Dear Sir,
            <br><br><br> Thank you very much for accepting our mentoring request. We are confirming the time, date & location for the same as mentioned below,
            <br><br>
            Mentoring Session Date : ………………………………………….<br>
            Mentoring Session Time : …………………………………………..<br>
            Mentoring Session Venue : ……………………………………<br>
            <br>
           
            Regards,<br>
            Team Mentorgateway<br>
            <a href="www.mentorgateway.com" target="_blank"> www.mentorgateway.com </a> <br>
            <a href="mailto:info@mentorgateway.com" target="_top"> info@mentorgateway.com </a> <br>
            <a href="tel:9825013774">+91 98250 13774</a><br>
            
            </body>';
            $from = 'info@mentorgateway.com';
            $to = $Startup->email; //info@mentorgateway.com
            $subject = "New Mentoring Session Request";
            $headers = "From: " . strip_tags($from) . "\r\n";
            $headers .= "Reply-To: ". strip_tags($from) . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            mail($to, $subject, $msg, $headers);
            mail('info@mentorgateway.com', $subject, $msg, $headers );
            mail('sunny6142@gmail.com', $subject, $msg, $headers );
 //   return view('welcome');
});

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/message', function () {
    return view('message');
});

Auth::routes();
//Guest
Route::get('/', 'GuestController@welcome');

Route::get('/contact', 'GuestController@contact')->name('contact');
Route::post('/subscribe', 'GuestController@subscribe');
Route::post('/contact', 'GuestController@contactPost');

Route::get('/status', 'AdminController@status');

Route::get('/mentors', 'GuestController@mentorslist')->name('mentors.list');
Route::post('/forget/password', 'GuestController@forgetpassword');

Route::get('/reset/{token}', 'GuestController@reset');
Route::post('/reset/user/password', 'GuestController@resetuserpassword');

Route::get('/active/{user}/{token}', 'GuestController@active');

//Admin
Route::get('/add/mentor', 'AdminController@layout_addmentor');

Route::get('/mentor/info/{id}', 'GuestController@mentordetail');
Route::get('/view/mentor/{val}', 'AdminController@layout_viewmentor');
Route::get('/edit/mentor/{val}', 'AdminController@layout_editmentor');

Route::get('/list/mentor', 'AdminController@listmentor')->name('list.mentor');
Route::get('/mentor/suggestion/id/{id}/pe/{pe}/ive/{ive}', 'AdminController@mentorsuggestion');
Route::post('/mentor/suggestion', 'AdminController@mentorsuggestionPOST');
Route::post('/mentor/suggestionall', 'AdminController@mentorsuggestionAll');
Route::get('/set/meeting/date/{reqmid}', 'AdminController@setMeetingDate');

Route::post('/add/mentor', 'AdminController@Addmentor')->name('add.mentor');
Route::post('/update/mentor', 'AdminController@Updatementor');
Route::post('/update/mentorlist', 'AdminController@listmentor_ajax');
Route::post('/delete/mentor', 'AdminController@Deletementor');
Route::post('/admin/deny/mentor_request', 'AdminController@Admin_Deny_Mentor_Request');

Route::get('/list/connection/{id}', 'AdminController@list_connection');
Route::get('/list/startup/connection/{id}', 'AdminController@list_startup_connection');
Route::get('/admin/view/mentor/profile/{id}', 'AdminController@mentor_profile_view')->name('mentor.profile.view');
Route::get('/admin/view/user/profile/{id}', 'AdminController@user_profile_view')->name('user.profile.view');
Route::get('/admin/view/accept/mentor/{mid}', 'AdminController@Accept_Mentor_View')->name('admin.view.accept.mentor');
Route::get('/admin/view/mentor/feedback/{mqid}', 'AdminController@mentor_feedback_view')->name('mentor.feedback.view');
Route::get('/admin/view/startup/feedback/{req_m}', 'AdminController@startup_feedback_view')->name('startup.feedback.view');

Route::get('/mentor/profile', 'AdminController@mentorprofile')->name('mentor.profile');
Route::post('Alogout', 'AdminController@Logout')->name('admin.logout');

//Mentor
Route::get('/message/{startup_id}', 'AdminController@message_startup');
Route::get('/mentor/startup/list/', 'AdminController@mentor_startup_list')->name('mentor.startup.list');
Route::get('/mentor/startup/approval/{mentor_status}', 'AdminController@mentor_startup_approval');
Route::post('/mentor/startup/approval', 'AdminController@mentor_startup_approvePOST');
Route::post('/mentor/startup/approval/suggestionall', 'AdminController@mentor_startup_suggestionAll');

Route::get('/mentor/feedback/trigger', 'AdminController@autotirggerfeedback')->name('autotirggerfeedback');

Route::get('/mentor/feedback/{req_m}', 'AdminController@mentor_feedback')->name('startup_feedback');
Route::post('/mentor/feedback', 'AdminController@mentor_feedback_Post');

Route::get('/event', 'MethodController@mentorevent');
Route::post('/delete/event', 'MethodController@deleteevent');

//User

Route::get('user/event', 'userMethodController@userevent');
Route::post('user/delete/event', 'userMethodController@deleteevent');

Route::get('/home', 'HomeController@index')->name('/home');
Route::get('/request/mentor', 'HomeController@Request_Mentor')->name('request');
Route::get('/req/mentor', 'HomeController@Req_Mentor')->name('request.mentor');
Route::get('/accept/mentor/{mid}', 'HomeController@Accept_Mentor')->name('accept.mentor');

Route::get('/edit/profile', 'HomeController@edit_profile');
Route::get('/request/approved', 'HomeController@list_startup_connection')->name('accepted.mentor');
Route::get('/user/view/accept/mentor/{mid}', 'HomeController@Accept_Mentor_View')->name('user.view.accept.mentor');
Route::get('/user/view/mentor/profile/{id}', 'HomeController@mentor_profile_view')->name('user.mentor.profile.view');

Route::get('/user/view/mentor/feedback/{mqid}', 'HomeController@mentor_feedback_view')->name('user.mentor.feedback.view');
Route::get('/user/view/startup/feedback/{req_m}', 'HomeController@startup_feedback_view')->name('user.startup.feedback.view');


Route::get('/startup/feedback/{req_m}', 'HomeController@startup_feedback')->name('startup_feedback');
Route::post('/startup/feedback', 'HomeController@startup_feedback_Post');

Route::post('/request/mentor', 'HomeController@Request_Mentor_Post');
Route::post('/accept/mentor', 'HomeController@Accept_Mentor_Post');

Route::post('/starup/form', 'HomeController@submitForm');
Route::post('/starup/form2', 'HomeController@submitForm2');
Route::post('/starup/form3', 'HomeController@submitForm3');
Route::post('/starup/form4', 'HomeController@submitForm4');
Route::post('/starup/form5', 'HomeController@submitForm5');
Route::post('/starup/form6', 'HomeController@submitForm6');
Route::get('/user/profile', 'HomeController@profile')->name('user.profile');
Route::post('Ulogout', 'HomeController@Logout')->name('user.logout');

//Auth
Route::post('/register/new_startup', 'Auth\RegisterController@reg');
Route::post('/starup/login', 'Auth\LoginController@StartupLogin');
Route::get('/mentor', 'AdminController@index')->name('mentor');

Route::prefix('admin')->group(function(){
    Route::post('/update/approval', 'AdminController@adminmentorapproval_ajax');
    Route::get('/deny', 'AdminController@adminmentordeny')->name('mentor.approved');
    Route::get('/approved', 'AdminController@adminmentorapproved')->name('mentor.approved');
    Route::get('/approval', 'AdminController@adminmentorapproval')->name('mentor.approval');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
   // Route::get('/', 'AdminController@index')->name('admin.dashboard');

    Route::get('/list/startup', 'AdminController@liststartup')->name('list.startup');
    Route::get('/view/startup/{val}', 'AdminController@layout_viewstartup');
});
Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
Route::get('mentor/login', 'Auth\AdminLoginController@showLoginForm')->name('mentor.login');