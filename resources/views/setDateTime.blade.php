@extends('layouts.mentor_header')

@section('content')
                <div class="pcoded-wrapper">
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="p-5">
                                    <!-- Page-header start -->
                                    <div class="page-header card m-0">
                                        <div class="row align-items-end">
                                            
                                        
                                    <!-- Page-header end -->

                                            <!-- Page body start -->
                                            
                                            <div class="container">
                                                <!--  form Create Post -->
<div class="" id="add_mentor_model_dialog" tabindex="-1" role="dialog">
    <div class="" role="document" style="width: auto;">
        <div class="modal-content">
            <!--   -->
                <!--   -->
            <div class="card" style=";">
                <div class="view-approval" >
                    <img style="width:auto; height:150px" class="card-img-top img-fluid img-thumbnail" src="https://www.w3schools.com/w3images/lights.jpg" alt="Card image cap">
                    <input class="request_m_id hidden" name="request_m_id"/>
                </div>
                <div class="view-approval card-body mt-3 tb-3">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="view-approval list-group list-group-flush">
                    <li class="list-group-item" id="expertise">Cras justo odio</li>
                    <li class="list-group-item" id="industry_experience">Dapibus ac facilisis in</li>
                    <li class="list-group-item" id="mentoring_session_time_v">Vestibulum at eros</li>
                    <li class="list-group-item" id="created_at">Vestibulum at eros</li>
                </ul>
                <div class="view-approval card-body text-right">
                    <a href="#" class="card-link btn btn-info btn-sm">Profile</a>
                    <a href="#" onclick="SDAT()"  class="card-link btn btn-warning btn-sm">Approve</a>
                </div>
                <ul id="form2" class="show-approval hidden list-group list-group-flush">
                    
                        <div class="form-group row add">
                            <label class="control-label col-sm-12 pt-2 mt-2 mb-3" for="mdob">Choose Time slot 1</label>
                            <div class="col-sm-4">
                                <label class="control-label col-sm-12" for="venu">Date&nbsp: </label>
                                <input type="date" required class="form-control" id="mdob" name="meetingdate[]" placeholder="Enter Your StartUp Name" required>
                                <p class="mdob_error err_toggle text-center alert alert-danger hidden"></p>
                            </div>
                            <div class="col-sm-4">
                                <label class="control-label col-sm-12" for="venu">Start Time&nbsp: </label>
                                <input id="start_time" class="form-control" type="time" name="starttime[]">
                                <p class="mdob_error err_toggle text-center alert alert-danger hidden"></p>
                            </div>
                            <div class="col-sm-4">
                                <label class="control-label col-sm-12" for="venu">End Time&nbsp: </label>
                                <input id="end-time" class="form-control" type="time" name="endtime[]">
                                <p class="mdob_error err_toggle text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-12" for="venu">Venue&nbsp: </label><br>
                            <div class="col-sm-12">
                                <textarea row="1" type="text" class="form-control" id="venu" name="venu[]" placeholder="Enter here" required></textarea>
                                <p class="venu_error err_toggle text-center alert alert-danger hidden"></p>
                            </div>
                        </div>

                        <div class="form-group row add">
                            <label class="control-label col-sm-12 pt-2 mt-2 mb-3" for="mdob">Choose Time slot 2</label>
                            <div class="col-sm-4">
                                <label class="control-label col-sm-12" for="venu">Date&nbsp: </label>
                                <input type="date" required class="form-control" id="mdob" name="meetingdate[]" placeholder="" required>
                                <p class="mdob_error err_toggle text-center alert alert-danger hidden"></p>
                            </div>
                            <div class="col-sm-4">
                                <label class="control-label col-sm-12" for="venu">Start Time&nbsp: </label>
                                <input id="start_time" class="form-control" type="time" name="starttime[]">
                                <p class="mdob_error err_toggle text-center alert alert-danger hidden"></p>
                            </div>
                            <div class="col-sm-4">
                                <label class="control-label col-sm-12" for="venu">End Time&nbsp: </label>
                                <input id="end-time" class="form-control" type="time" name="endtime[]">
                                <p class="mdob_error err_toggle text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-12" for="venu">Venue&nbsp: </label><br>
                            <div class="col-sm-12">
                                <textarea row="1" type="text" class="form-control" id="venu" name="venu[]" placeholder="Enter here" required></textarea>
                                <p class="venu_error err_toggle text-center alert alert-danger hidden"></p>
                            </div>
                        </div>

                        <div class="form-group row add">
                            <label class="control-label col-sm-12 pt-2 mt-2 mb-3" for="mdob">Choose Time slot 3</label>
                            <div class="col-sm-4">
                                <label class="control-label col-sm-12" for="venu">Date&nbsp: </label>
                                <input type="date" required class="form-control" id="mdob" name="meetingdate[]" placeholder="Enter Your StartUp Name" required>
                                <p class="mdob_error err_toggle text-center alert alert-danger hidden"></p>
                            </div>
                            <div class="col-sm-4">
                                <label class="control-label col-sm-12" for="venu">Start Time&nbsp: </label>
                                <input id="start_time" class="form-control" type="time" name="starttime[]">
                                <p class="mdob_error err_toggle text-center alert alert-danger hidden"></p>
                            </div>
                            <div class="col-sm-4">
                                <label class="control-label col-sm-12" for="venu">End Time&nbsp: </label>
                                <input id="end-time" class="form-control" type="time" name="endtime[]">
                                <p class="mdob_error err_toggle text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-12" for="venu">Venue&nbsp: </label><br>
                            <div class="col-sm-12">
                                <textarea row="1" type="text" class="form-control" id="venu" name="venu[]" placeholder="Enter here" required></textarea>
                                <p class="venu_error err_toggle text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                
                </ul>
                <div class="show-approval hidden card-body text-right">
                    <p id="m_error_msg" class="m-3"></p>
                    <a href="#" class="card-link btn btn-info btn-sm">Deny</a>
                    <a href="#" onclick="approve(this)" id="proceed" class="card-link btn btn-warning btn-sm">Approve</a>
                </div>
            </div>
        </div>
    </div>
</div> 
                                               
                                            </div>
                                            <!-- Page body end -->
                                        </div>
                                    </div>
                                 </div>
                            </div>
                            <!-- Main-body end -->
                        </div>
                    </div>
                </div>
                
                                                  
                
<script>
    $(document).ready(function () {
        $('.view-approval').addClass('hidden');
        $('.show-approval').removeClass('hidden');
      
    });
</script> 
<!-- Msg -->
<div id="msgbox" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title text-left">Confirmation</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <input hidden type="text" class="form-control hidden" id="del_id" name="del_id">
      </div>
      <div class="modal-body">
        <h4 id="del_msg_success" >Are you sure want to delete this ?</h4>
        
                                                    
      </div>
      <div class="modal-footer">
        <button type="button" onclick="delete_Mentor()" id ="del_id_ajax" class="btn btn-danger">Delete</button>
        <button type="button" id="mdspinner"  class="btn mentor_modal_button btn-primary hidden"><i class="fa fa-spinner"></i> Pls Wait...</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                                        

      </div>
    </div>

  </div>
</div>


<script>
   function readURL(input, id) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                $('#'+id).removeAttr("hidden");
                $('#'+id).removeClass("hidden");
                reader.onload = function (e) {
                    $('#'+id)
                        .attr('src', e.target.result)
                        .width(50)
                        .height(50);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>



<script>

    function clear()
    {
        $('.err_toggle').addClass('hidden');
        $('#image_id_').addClass('hidden');
        $('#form2').find('input').val('');
        $('#form2').find('select').val('');
        $('#form2').find('textarea').val('');
        $('#form2').find('input').removeClass("border border-danger");
        $('#form2').find('select').removeClass("border border-danger");
        $('#form2').find('textarea').removeClass("border border-danger");
        $('.mentor_modal_button').addClass('hidden');
    }

    // approve
    function approve(t){
        $(t).html('<i class="fa fa-spinner fa-spin"></i> Pls Wait..');
        $('#m_error_msg').addClass('hidden');
    
        var meetingdate = JSON.stringify($('#form2').find('input[name^="meetingdate"]').serializeArray());
        var starttime = JSON.stringify($('#form2').find('input[name^="starttime"]').serializeArray());
        var endtime = JSON.stringify($('#form2').find('input[name^="endtime"]').serializeArray());
        var venu = JSON.stringify($('#form2').find('textarea[name^="venu"]').serializeArray());

        console.log('{{$reqmid}}');

        var data = new FormData();
        data.append('id', '{{$reqmid}}');
        data.append('venu', venu);
        data.append('meetingdate',  meetingdate);
        data.append('starttime', starttime);
        data.append('endtime', endtime);
        
            $.ajax({
                type : 'POST',
                url : '/mentor/startup/approval',
                beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
                contentType: false,
                data:data,
                processData: false,
                success: function(data) {
                    
                    window.location.replace("/status");
                    $('#m_error_msg').removeClass('hidden');
                    $("#m_error_msg").html("<span class='text-success'> Approved </span>");
                    $('#form2').find('input').val('');
                    $(t).html("<span class='text-success'><span class='glyphicon glyphicon-ok'></span> Approved</span>");
                   
            }
            }).fail(function (jqXHR, textStatus, error) { 
                $('#m_error_msg').removeClass('hidden'); 
                    $("#m_error_msg").html("<span class='text-danger'>Error :" + error +"</span>");
                    
                    $('#m_error_msg').removeClass('hidden');
                    $(t).html("Approve");
                   
            });
            
    }
//Show add mentor
	$(document).ready(function(){     
        $("#add_mentor_model").click(function(){
            $('#add_mentor_model_dialog').modal('show');
            $('.form-horizontal').show();
            showtab('step1');
            $("#form2 :input").prop("disabled", false);
            $("#form2 :button").prop("disabled", false);

            clear();

            $('#msubmit').removeClass('hidden');
        });
    }) 

    function Delete_user(val)
    {
        $('#msgbox').modal('show');
        $('.form-horizontal').show();
        $('#del_id').val(val.id);
        $("#del_msg_success").html("<span class='text-warning'>Are you sure want to delete this ?</span>");
                   
    }
</script>     


<!--  End form Create Post -->                              
<script>
function showtab(id)
{
    $('#add_mentor_model_dialog').modal('handleUpdate');

        if(id == 'step1'){
            $('#step1').addClass('active show');
            $('#present1').addClass('active');
            $('#present1').removeClass('disable');
        }  else {
            $('#step1').removeClass('active show');
            $('#present1').removeClass('active');
            $('#present1').addClass('disable');
        }

        if(id == 'step2'){
            $('#step2').addClass('active show');
            $('#present2').addClass('active');
            $('#present2').removeClass('disable');
        }  else {
            $('#step2').removeClass('active show');
            $('#present2').removeClass('active');
            $('#present2').addClass('disable');
        }

        if(id == 'step3'){
            $('#step3').addClass('active show')
            $('#present3').addClass('active');
            $('#present3').removeClass('disable');
        }  else {
            $('#step3').removeClass('active show');
            $('#present3').removeClass('active');
            $('#present3').addClass('disable');
        }

        if(id == 'step4'){
            $('#step4').addClass('active show');
            $('#present4').addClass('active');
            $('#present4').removeClass('disable');
        }  else {
            $('#step4').removeClass('active show');
            $('#present4').removeClass('active');
            $('#present4').addClass('disable');
        }

        if(id == 'step5'){
            $('#step5').addClass('active show');
            $('#present5').addClass('active');
            $('#present5').removeClass('disable');
        }  else {
            $('#step5').removeClass('active show');
            $('#present5').removeClass('active');
            $('#present5').addClass('disable');
        }

        if(id == 'complete'){
            $('#complete').addClass('active show');
            $('#present6').addClass('active');
            $('#present6').removeClass('disable');
        }  else {
            $('#complete').removeClass('active show');
            $('#present6').removeClass('active');
            $('#present6').addClass('disable');
        }
}

function Editdetail(val) 
{
    $('#add_mentor_model_dialog').modal('show');
    $('.form-horizontal').show();
    $("#form2 :input").prop("disabled", false);
    $("#form2 :button").prop("disabled", false);
   
    clear();
    
    $('#msg').removeClass('hidden'); 
    $("#msg").html("<span class='text-danger'>** Leave Password Field Blank If You Don't Wish To Update Password </span>");
    showtab('step1');
    $('input[name=memail]').prop("disabled", true);

    $('input[name=mid').val(val.id);
    $('input[name=mname').val(val.name);
    $('select[name=mgender]').val(val.gender);
    $('input[name=mmobile]').val(val.mobile);
    $('input[name=tel_no_office]').val(val.telephone_office);
    $('input[name=tel_no_home]').val(val.telephone_home);
    $('input[name=mdob]').val(val.dob);
    $('input[name=memail]').val(val.email);
    $('input[name=Address]').val(val.address);
    $('input[name=mcompany_name]').val(val.company_name);
    $('input[name=mdesignation]').val(val.designation);
           
    $('textarea[name=about_you]').val(val.about_you);
    $('textarea[name=primary_and_secondary_objectives]').val(val.primary_and_secondary_objectives);
    $('select[name=mprofessional_expertise]').val(val.professional_expertise);
    $('select[name=mindustry_experience]').val(val.industry_vertical_experience);
    $('select[name=marea]').val(val.areas_of_business_and_management_competence);
    $('input[name=tc]').val(val.time_commitment);
    $('input[name=sdow]').val(val.days_of_week);
    $('input[name=st]').val(val.suitable_time);
         
    $('input[name=LI]').val(val.linked_in);
    $('input[name=fb]').val(val.facebook);
    $('input[name=twitter]').val(val.twitter);

    $('input[name=mpassword]').val();

    $('.mentor_modal_button').addClass('hidden');
    $('#mupdate').removeClass('hidden');
    //        data.append('image', $('#image')[0].files[0]);
}

function viewdetil(val) 
{
    $('.view-approval').removeClass('hidden');
    $('.show-approval').addClass('hidden');
    
    $('#add_mentor_model_dialog').modal('show');
    $('.form-horizontal').show();

    $('.card-title').html(val.start_up_name);
    $('.card-text').html('<b>Problem : </b>'+val.problem);
    $('#expertise').html('<b>Professional Expertise : </b>'+val.expertise);
    $('#industry_experience').html('<b>Industry Vertical Experience : </b>'+val.industry_experience);
    $('#mentoring_session_time_v').html('<b>Mentoring Session : </b>'+val.mentoring_session_time_v);
    $('#created_at').html('<b>Created At : </b>'+val.created_at);
    $('.request_m_id').val(val.request_mentor_id);
   // $("#proceed").attr("href", "/mentor/suggestion/id/"+val.request_mentor_id+"/pe/"+val.professional_expertise+"/ive/"+val.industry_vertical_experience);
}

// <!-- Add mentor -->
    $(document).ready(function(){
        $("#msubmit").click(function() {
            $('.err_toggle').addClass('hidden');
            $('.mentor_modal_button').addClass('hidden');
            $('#mspinner').removeClass('hidden');
            
            $('#form2').find('input').removeClass("border border-danger");
            
            var data = new FormData();

            data.append('name', $('input[name=mname]').val());
            data.append('gender', $('select[name=mgender]').val());
            data.append('mobile', $('input[name=mmobile]').val());
            data.append('telephone_office', $('input[name=tel_no_office]').val());
            data.append('telephone_home', $('input[name=tel_no_home]').val());
            data.append('dob', $('input[name=mdob]').val());
            data.append('email', $('input[name=memail]').val());
            data.append('address', $('input[name=Address]').val());
            data.append('company_name', $('input[name=mcompany_name]').val());
            data.append('designation', $('input[name=mdesignation]').val());
           
            data.append('about_you', $('textarea[name=about_you]').val());
            data.append('primary_and_secondary_objectives', $('textarea[name=primary_and_secondary_objectives]').val());
            data.append('professional_expertise', $('select[name=mprofessional_expertise]').val());
            data.append('industry_vertical_experience', $('select[name=mindustry_experience]').val());
            data.append('areas_of_business_and_management_competence', $('select[name=marea]').val());
            data.append('time_commitment', $('input[name=tc]').val());
            data.append('days_of_week', $('input[name=sdow]').val());
            data.append('suitable_time', $('input[name=st]').val());
         
            data.append('linked_in', $('input[name=LI]').val());
            data.append('facebook', $('input[name=fb]').val());
            data.append('twitter', $('input[name=twitter]').val());
            data.append('password', $('input[name=mpassword]').val());
            data.append('password_confirmation', $('input[name=mcpassword]').val());

            data.append('image', $('#image')[0].files[0]);
              
            $.ajax({
               type : 'POST',
               url : '/add/mentor',
               beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
               data: data,
               contentType: false,
               processData: false,
               success: function(data) {
                   if(data.errors) {
                        
                        if(data.errors.linked_in){
                            showtab('step6');
                            $('#LI').addClass("border border-danger");
                            $('.LI_error').removeClass('hidden');
                            $('.LI_error').text(data.errors.linked_in);
                        }
                        if(data.errors.facebook){
                            showtab('step6');
                            $('#fb').addClass("border border-danger");
                            $('.fb_error').removeClass('hidden');
                            $('.fb_error').text(data.errors.facebook);
                        }
                        if(data.errors.twitter){
                            showtab('step6');
                            $('#twitter').addClass("border border-danger");
                            $('.twitter_error').removeClass('hidden');
                            $('.twitter_error').text(data.errors.twitter);
                        }

                        if(data.errors.time_commitment){
                            showtab('step5');
                            $('#tc').addClass("border border-danger");
                            $('.tc_error').removeClass('hidden');
                            $('.tc_error').text(data.errors.time_commitment);
                        }
                        if(data.errors.days_of_week){
                            showtab('step5');
                            $('#sdow').addClass("border border-danger");
                            $('.sdow_error').removeClass('hidden');
                            $('.sdow_error').text(data.errors.days_of_week);
                        }
                        if(data.errors.suitable_time){
                            showtab('step5');
                            $('#st').addClass("border border-danger");
                            $('.st_error').removeClass('hidden');
                            $('.st_error').text(data.errors.suitable_time);
                        }

                        if(data.errors.about_you){
                            showtab('step4');
                            $('#about_you').addClass("border border-danger");
                            $('.about_you_error').removeClass('hidden');
                            $('.about_you_error').text(data.errors.about_you);
                        }
                        if(data.errors.primary_and_secondary_objectives){
                            showtab('step4');
                            $('#primary_and_secondary_objectives').addClass("border border-danger");
                            $('.poso_error').removeClass('hidden');
                            $('.poso_error').text(data.errors.primary_and_secondary_objectives);
                        }

                        if(data.errors.image){
                            showtab('step3');
                         //   $('#mname').addClass("border border-danger");
                            $('.image_id_error').removeClass('hidden');
                            $('.image_id_error').text(data.errors.image);
                        }
                        if(data.errors.company_name){
                            showtab('step3');
                            $('#mcompany_name').addClass("border border-danger");
                            $('.mcompany_name_error').removeClass('hidden');
                            $('.mcompany_name_error').text(data.errors.company_name);
                        }
                        if(data.errors.designation){
                            showtab('step3');
                            $('#mdesignation').addClass("border border-danger");
                            $('.mdesignation_error').removeClass('hidden');
                            $('.mdesignation_error').text(data.errors.designation);
                        }
                        if(data.errors.professional_expertise){
                            showtab('step3');
                            $('#mprofessional_expertise').addClass("border border-danger");
                            $('.mprofessional_expertise_error').removeClass('hidden');
                            $('.mprofessional_expertise_error').text(data.errors.professional_expertise);
                        }
                        if(data.errors.industry_vertical_experience){
                            showtab('step3');
                            $('#mindustry_experience').addClass("border border-danger");
                            $('.mindustry_experience_error').removeClass('hidden');
                            $('.mindustry_experience_error').text(data.errors.industry_vertical_experience);
                        }
                        if(data.errors.areas_of_business_and_management_competence){
                            showtab('step3');
                            $('#marea').addClass("border border-danger");
                            $('.marea_experience_expertise_error').removeClass('hidden');
                            $('.marea_experience_expertise_error').text(data.errors.areas_of_business_and_management_competence);
                        }

                        if(data.errors.address){
                            showtab('step2');
                            $('#Address').addClass("border border-danger");
                            $('.Address_error').removeClass('hidden');
                            $('.Address_error').text(data.errors.address);
                        }
                        if(data.errors.telephone_office	){
                            showtab('step2');
                            $('#tel_no_office').addClass("border border-danger");
                            $('.tel_no_office_error').removeClass('hidden');
                            $('.tel_no_office_error').text(data.errors.telephone_office);
                        }
                        if(data.errors.telephone_home){
                            showtab('step2');
                            $('#tel_no_home').addClass("border border-danger");
                            $('.tel_no_home_error').removeClass('hidden');
                            $('.tel_no_home_error').text(data.errors.telephone_home);
                        }
                        if(data.errors.mobile){
                            showtab('step2');
                            $('#mmobile').addClass("border border-danger");
                            $('.mmobile_error').removeClass('hidden');
                            $('.mmobile_error').text(data.errors.mobile);
                        }

                        if(data.errors.name){
                            showtab('step1');
                            $('#mname').addClass("border border-danger");
                            $('.sname_error').removeClass('hidden');
                            $('.sname_error').text(data.errors.name);
                        }
                        if(data.errors.gender){
                            showtab('step1');
                            $('#mgender').addClass("border border-danger");
                            $('.mgender_error').removeClass('hidden');
                            $('.mgender_error').text(data.errors.gender);
                        }
                        if(data.errors.dob){
                            showtab('step1');
                            $('#mdob').addClass("border border-danger");
                            $('.mdob_error').removeClass('hidden');
                            $('.mdob_error').text(data.errors.dob);
                        }
                        if(data.errors.email){
                            showtab('step1');
                            $('#memail').addClass("border border-danger");
                            $('.memail_error').removeClass('hidden');
                            $('.memail_error').text(data.errors.email);
                        }
                        if(data.errors.password){
                            showtab('step1');
                            $('#mpassword').addClass("border border-danger");
                        //    $('#mcpassword').addClass("border border-danger");
                            $('.password_error').removeClass('hidden');
                            $('.password_error').text(data.errors.password);
                        }
                        
                   }
                   else
                   {
                       clear();
                       showtab('step1');
                       $('#msg').removeClass('hidden'); 
                       $("#msg").text("Mentor Successfully Added");
                       updatelist();
                   }
                    $('.mentor_modal_button').addClass('hidden');
                    $('#msubmit').removeClass('hidden');
               }
            }).fail(function (jqXHR, textStatus, error) {  
                    $('#msg').removeClass('hidden');
                    $("#msg").text("Error !"+error);
                    $('.addmentor_error').removeClass('hidden');             
                    $('.addmentor_error').text('Error ! '+error);
                    $('.mentor_modal_button').addClass('hidden');
                    $('#msubmit').removeClass('hidden');
                });
        });
    })

// Delete
    function delete_Mentor(){
        $('.err_toggle').addClass('hidden');
            $('#del_id_ajax').addClass('hidden');
            $('#mdspinner').removeClass('hidden');
             
            var data = new FormData();
            data.append('id', $('input[name=request_m_id]').val());

            $.ajax({
                type : 'POST',
                url : '/delete/mentor',
                beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
                contentType: false,
                data:data,
                processData: false,
                success: function(data) {
                   
                    $("#del_msg_success").html("<span class='text-success'>Mentor Successfully Deleted :</span>");
                       updatelist();
                    $('#del_id_ajax').removeClass('hidden');
                    $('#mdspinner').addClass('hidden');
            }
            }).fail(function (jqXHR, textStatus, error) {  
                    $("#del_msg_success").html("<span class='text-danger'>Error :" + error +"</span>");
                    
                    $('#del_id_ajax').removeClass('hidden');
                    $('#mdspinner').addClass('hidden');
            });
            
    }
// <!-- Update mentor -->
$(document).ready(function(){
        $("#mupdate").click(function() {
            $('.err_toggle').addClass('hidden');
            $('.mentor_modal_button').addClass('hidden');
            $('#mspinner').removeClass('hidden');
            
            $('#form2').find('input').removeClass("border border-danger");
            
            var data = new FormData();
            data.append('id', $('input[name=mid]').val());
            data.append('name', $('input[name=mname]').val());
            data.append('gender', $('select[name=mgender]').val());
            data.append('mobile', $('input[name=mmobile]').val());
            data.append('telephone_office', $('input[name=tel_no_office]').val());
            data.append('telephone_home', $('input[name=tel_no_home]').val());
            data.append('dob', $('input[name=mdob]').val());
            data.append('email', $('input[name=memail]').val());
            data.append('address', $('input[name=Address]').val());
            data.append('company_name', $('input[name=mcompany_name]').val());
            data.append('designation', $('input[name=mdesignation]').val());
           
            data.append('about_you', $('textarea[name=about_you]').val());
            data.append('primary_and_secondary_objectives', $('textarea[name=primary_and_secondary_objectives]').val());
            data.append('professional_expertise', $('select[name=mprofessional_expertise]').val());
            data.append('industry_vertical_experience', $('select[name=mindustry_experience]').val());
            data.append('areas_of_business_and_management_competence', $('select[name=marea]').val());
            data.append('time_commitment', $('input[name=tc]').val());
            data.append('days_of_week', $('input[name=sdow]').val());
            data.append('suitable_time', $('input[name=st]').val());
         
            data.append('linked_in', $('input[name=LI]').val());
            data.append('facebook', $('input[name=fb]').val());
            data.append('twitter', $('input[name=twitter]').val());
            data.append('password', $('input[name=mpassword]').val());
            data.append('password_confirmation', $('input[name=mcpassword]').val());

            data.append('image', $('#image')[0].files[0]);
              
            $.ajax({
               type : 'POST',
               url : '/update/mentor',
               beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
               data: data,
               contentType: false,
               processData: false,
               success: function(data) {
                   if(data.errors) {
                        
                        if(data.errors.linked_in){
                            showtab('step6');
                            $('#LI').addClass("border border-danger");
                            $('.LI_error').removeClass('hidden');
                            $('.LI_error').text(data.errors.linked_in);
                        }
                        if(data.errors.facebook){
                            showtab('step6');
                            $('#fb').addClass("border border-danger");
                            $('.fb_error').removeClass('hidden');
                            $('.fb_error').text(data.errors.facebook);
                        }
                        if(data.errors.twitter){
                            showtab('step6');
                            $('#twitter').addClass("border border-danger");
                            $('.twitter_error').removeClass('hidden');
                            $('.twitter_error').text(data.errors.twitter);
                        }

                        if(data.errors.time_commitment){
                            showtab('step5');
                            $('#tc').addClass("border border-danger");
                            $('.tc_error').removeClass('hidden');
                            $('.tc_error').text(data.errors.time_commitment);
                        }
                        if(data.errors.days_of_week){
                            showtab('step5');
                            $('#sdow').addClass("border border-danger");
                            $('.sdow_error').removeClass('hidden');
                            $('.sdow_error').text(data.errors.days_of_week);
                        }
                        if(data.errors.suitable_time){
                            showtab('step5');
                            $('#st').addClass("border border-danger");
                            $('.st_error').removeClass('hidden');
                            $('.st_error').text(data.errors.suitable_time);
                        }

                        if(data.errors.about_you){
                            showtab('step4');
                            $('#about_you').addClass("border border-danger");
                            $('.about_you_error').removeClass('hidden');
                            $('.about_you_error').text(data.errors.about_you);
                        }
                        if(data.errors.primary_and_secondary_objectives){
                            showtab('step4');
                            $('#primary_and_secondary_objectives').addClass("border border-danger");
                            $('.poso_error').removeClass('hidden');
                            $('.poso_error').text(data.errors.primary_and_secondary_objectives);
                        }

                        if(data.errors.image){
                            showtab('step3');
                         //   $('#mname').addClass("border border-danger");
                            $('.image_id_error').removeClass('hidden');
                            $('.image_id_error').text(data.errors.image);
                        }
                        if(data.errors.company_name){
                            showtab('step3');
                            $('#mcompany_name').addClass("border border-danger");
                            $('.mcompany_name_error').removeClass('hidden');
                            $('.mcompany_name_error').text(data.errors.company_name);
                        }
                        if(data.errors.designation){
                            showtab('step3');
                            $('#mdesignation').addClass("border border-danger");
                            $('.mdesignation_error').removeClass('hidden');
                            $('.mdesignation_error').text(data.errors.designation);
                        }
                        if(data.errors.professional_expertise){
                            showtab('step3');
                            $('#mprofessional_expertise').addClass("border border-danger");
                            $('.mprofessional_expertise_error').removeClass('hidden');
                            $('.mprofessional_expertise_error').text(data.errors.professional_expertise);
                        }
                        if(data.errors.industry_vertical_experience){
                            showtab('step3');
                            $('#mindustry_experience').addClass("border border-danger");
                            $('.mindustry_experience_error').removeClass('hidden');
                            $('.mindustry_experience_error').text(data.errors.industry_vertical_experience);
                        }
                        if(data.errors.areas_of_business_and_management_competence){
                            showtab('step3');
                            $('#marea').addClass("border border-danger");
                            $('.marea_experience_expertise_error').removeClass('hidden');
                            $('.marea_experience_expertise_error').text(data.errors.areas_of_business_and_management_competence);
                        }

                        if(data.errors.address){
                            showtab('step2');
                            $('#Address').addClass("border border-danger");
                            $('.Address_error').removeClass('hidden');
                            $('.Address_error').text(data.errors.address);
                        }
                        if(data.errors.telephone_office	){
                            showtab('step2');
                            $('#tel_no_office').addClass("border border-danger");
                            $('.tel_no_office_error').removeClass('hidden');
                            $('.tel_no_office_error').text(data.errors.telephone_office);
                        }
                        if(data.errors.telephone_home){
                            showtab('step2');
                            $('#tel_no_home').addClass("border border-danger");
                            $('.tel_no_home_error').removeClass('hidden');
                            $('.tel_no_home_error').text(data.errors.telephone_home);
                        }
                        if(data.errors.mobile){
                            showtab('step2');
                            $('#mmobile').addClass("border border-danger");
                            $('.mmobile_error').removeClass('hidden');
                            $('.mmobile_error').text(data.errors.mobile);
                        }

                        if(data.errors.name){
                            showtab('step1');
                            $('#mname').addClass("border border-danger");
                            $('.sname_error').removeClass('hidden');
                            $('.sname_error').text(data.errors.name);
                        }
                        if(data.errors.gender){
                            showtab('step1');
                            $('#mgender').addClass("border border-danger");
                            $('.mgender_error').removeClass('hidden');
                            $('.mgender_error').text(data.errors.gender);
                        }
                        if(data.errors.dob){
                            showtab('step1');
                            $('#mdob').addClass("border border-danger");
                            $('.mdob_error').removeClass('hidden');
                            $('.mdob_error').text(data.errors.dob);
                        }
                        if(data.errors.email){
                            showtab('step1');
                            $('#memail').addClass("border border-danger");
                            $('.memail_error').removeClass('hidden');
                            $('.memail_error').text(data.errors.email);
                        }
                        if(data.errors.password){
                            showtab('step1');
                            $('#mpassword').addClass("border border-danger");
                        //    $('#mcpassword').addClass("border border-danger");
                            $('.password_error').removeClass('hidden');
                            $('.password_error').text(data.errors.password);
                        }
                        
                   }
                   else
                   {
                       clear();
                       showtab('step1');
                       $('#msg').removeClass('hidden'); 
                       $("#msg").text("Mentor Successfully Updated");
                       updatelist();
                   }
                    $('.mentor_modal_button').addClass('hidden');
                    $('#mupdate').removeClass('hidden');
               }
            }).fail(function (jqXHR, textStatus, error) {  
                    $('#msg').removeClass('hidden');
                    $("#msg").text("Error ! "+error);
                    $('.addmentor_error').removeClass('hidden');             
                    $('.addmentor_error').text('Error ! '+error);
                    $('.mentor_modal_button').addClass('hidden');
                    $('#mupdate').removeClass('hidden');
                });
        });
    })


    

</script>

<script>
$(document).ready(function(){
    $(".tell").intlTelInput({
          utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js"
        });
})
</script>
 <!-- end Add mentor -->
@endsection


