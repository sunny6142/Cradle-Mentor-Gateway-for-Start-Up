<?php
    if(Auth::user()->roll == 3)  $val = "layouts.startup"; 
    if(Auth::user()->roll == 2) $val = "layouts.mentor_header"; 
    if(Auth::user()->roll == 1) $val = "layouts/admin_header";
?>
    

@extends($val) 

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
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <i class="icofont icofont-file-code bg-c-blue"></i>
                                                    <div class="d-inline">
                                                        <h4>Up Comming Meeting</h4>
                                                        {{--<span>Add <code>Delete</code> & Update</span>--}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item">
                                                            <a href="index.html">
                                                                <i class="icofont icofont-home"></i>
                                                            </a>
                                                        </li>
                                                        
                                                        <li><a href="#!" hidden>filter</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        
                                    <!-- Page-header end -->

                                            <!-- Page body start -->
                                            
                                            <div class="container">
                                                
                                                <div class="card-block table-border-style">
                                                    <div class="table-responsive">
                                                        <table class="table" id="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>No.</th>
                                                                    <th>Name</th>
                                                                    <th>Start Up</th>
                                                                    <th>venu</th>
                                                                    <th>date</th>
                                                                    <th class="text-success">time</th>
                                                                    <th class="text-center" width="200px">
                                                                        <a href="{{route('add.mentor')}}" id="add_mentor_model" class="btn btn-success btn-sm">
                                                                            <i class="glyphicon glyphicon-plus"></i>
                                                                        </a>
                                                                    </th>
                                                                </tr>
                                                                {{ csrf_field() }}
                                                            </thead>
                                                            <tbody id="mentortable">
                                                            <?php 
                                                                if (empty($_GET['page'])) {
                                                                    $_GET['page'] = 1;
                                                                    $no = 1;
                                                                }
                                                                else
                                                                    $no = ((($_GET['page']-1) * 25) +1);
                                                            ?>
                                                            @foreach ($events as $event)
                                                                <tr class="mentor{{$event->id}}">
                                                                    <td>{{ $no++}} </td>
                                                                    <td>{{ $event->name }} </td>
                                                                    <td>{{ $event->start_up_name }} </td>
                                                                    <td>{{ $event->venu }} </td>
                                                                    <td class="text-success">{{ $event->date}} </td>
                                                                    <td class="text-danger">{{ $event->start_time }} - {{ $event->end_time }} </td>
                                                                    <td>
                                                                        <a onclick="Delete_user( {{ json_encode($event) }} )" href="#" class="btn btn-danger btn-sm">
                                                                            <i class="glyphicon glyphicon-trash"></i> Cancel
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                            <div class="text-center hidden" id="table_progress"><i class="fa fa-cog fa-spin text-success" style="font-size:48px"></i><div>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="text-right">
                                                    {{ $events->links() }}
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
                
                                                  
      

<!-- Msg -->
<div id="msgbox" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title text-left">Confirmation</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <input hidden type="text" class="form-control hidden" id="del_id" name="del_id">
        <input hidden type="email" class="form-control hidden" id="del_email" name="del_email">
        <input hidden type="text" class="form-control hidden" id="del_date" name="del_date">
        <input hidden type="text" class="form-control hidden" id="del_time" name="del_time">
        <input hidden type="text" class="form-control hidden" id="del_venue" name="del_venue">
        <input hidden type="text" class="form-control hidden" id="del_name" name="del_name">
      </div>
      <div class="modal-body">
         <textarea type="text" class="form-control" id="del_event" name="del_event" placeholder="Why you want to cancel this meeting" rows="3"></textarea>
                                                                
        <h4 id="del_msg_success" >Kindly mention the reason for cancelling the seasion ?</h4>
        
                                                    
      </div>
      <div class="modal-footer">
        <button type="button" onclick="delete_Mentor()" id ="del_id_ajax" class="btn btn-danger">Submit </button>
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
    $(document).ready(function () {

        $("#sp1").click(function(){
            showtab("step1");
        });

        $("#sp2").click(function(){
            showtab("step2");
        });

        $("#sp3").click(function(){
            showtab("step3");
        });

        $("#sp4").click(function(){
            showtab("step4");
        });

        $("#sp5").click(function(){
            showtab("step5");
        });

        $("#sp6").click(function(){
            showtab("complete");
        });

    });
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
//Show add mentor
	$(document).ready(function(){     
        $("#add_mentor_model").click(function(){
            /* Uncomment to show dialog
            $('#add_mentor_model_dialog').modal('show');
            $('.form-horizontal').show();
            showtab('step1');
            $("#form2 :input").prop("disabled", false);
            $("#form2 :button").prop("disabled", false);

            clear();

            $('#msubmit').removeClass('hidden');
            */
        });
    }) 

    function Delete_user(val)
    {
        $('#msgbox').modal('show');
        $('.form-horizontal').show();
        $('#del_id').val(val.request_mentor);
        $('#del_email').val(val.email);

        $('#del_date').val(val.date);
        $('#del_time').val(val.start_time+' - '+val.end_time);
        $('#del_venue').val(val.venu);
        $('#del_name').val(val.name);

        $("#del_msg_success").html("<span class='text-warning'>Are you sure want to delete this ?</span>");
                   
    }
</script>     


<!--  End form Create Post -->                              
<script>


// Delete
    function delete_Mentor(){

        let v = $('textarea[name=del_event]').val();
        if(v == ''){
            $("#del_msg_success").html("<span class='text-danger'>Why you want to cancel this meeting Required</span>");
            return;
        }
            $('.err_toggle').addClass('hidden');
            $('#del_id_ajax').addClass('hidden');
            $('#mdspinner').removeClass('hidden');
             
            var data = new FormData();
            data.append('request_mentor', $('input[name=del_id]').val());
            data.append('event', $('textarea[name=del_event]').val());
            data.append('email', $('input[name=del_email]').val());

            data.append('date', $('input[name=del_date]').val());
            data.append('time', $('input[name=del_time]').val());
            data.append('venue', $('input[name=del_venue]').val());
            data.append('name', $('input[name=del_name]').val());

            $.ajax({
                type : 'POST',
                url : '/delete/event',
                beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
                contentType: false,
                data:data,
                processData: false,
                success: function(data) {
                   
                    $("#del_msg_success").html("<span class='text-success'>Meetig has been Canceled</span>");
                //       updatelist();
                window.location.reload(true);
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

function updatelist()
{   
    $('#mentortable').addClass('hidden');
    $('#table_progress').removeClass('hidden');
  
  //  var page = $(this).attr('href').split('page=')[1];

        $.ajax({
            type : 'POST',
            url : '/update/mentorlist?page={{$_GET["page"]}}',
            beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
            contentType: false,
            processData: false,
            success: function(data) {
                $('#mentortable').text('');
                var i = 1;
                for (val in data['data']) {  
                    $('#mentortable').append('<tr>'+
                        '<td>'+ i+ '</td>'+
                        '<td>'+ data['data'][val]["name"] +'</td>'+
                        '<td>'+ data['data'][val]["email"] +'</td>'+
                        '<td>'+ data['data'][val]["mobile"] +'</td>'+
                        '<td class="text-success">'+ data['data'][val]["company_name"] +'</td>'+
                        '<td class="text-danger">'+  data['data'][val]["created_at"]  +'</td>'+
                        '<td>'+                                    
                            '<a onclick=\'viewdetil('+ JSON.stringify( data['data'][val] )  +')\' href="#" class="btn btn-info btn-sm" >'+
                                '<i class="glyphicon glyphicon-eye-open"></i>'+
                            '</a>&nbsp'+
                            '<a onclick=\'Editdetail('+  JSON.stringify( data['data'][val] )  +')\' href="#" class="btn btn-warning btn-sm" >'+
                                '<i class="glyphicon glyphicon-pencil"></i>'+
                            '</a>&nbsp'+
                            '</a>'+
                            '<a onclick=\'Delete_user('+  JSON.stringify( data['data'][val] ) +')\' href="#" class="btn btn-danger btn-sm">'+
                                '<i class="glyphicon glyphicon-trash"></i>'+
                            '</a>'+
                        '</td>'+
                    '</tr>');
                    i = i+1;
                }
                $('#mentortable').removeClass('hidden');
                $('#table_progress').addClass('hidden');
            }
        }).fail(function (jqXHR, textStatus, error) {  
            $('#mentortable').removeClass('hidden');
            $('#table_progress').addClass('hidden');
        });
}
    

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


