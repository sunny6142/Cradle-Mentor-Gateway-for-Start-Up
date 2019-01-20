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
                                        <div class="row align-items-center">
                                            <div class="col-lg-12">
                                                <div class="page-header-title">
                                                    <i class="icofont icofont-file-code bg-c-blue"></i>
                                                    <div class="d-inline">
                                                        <h3>Accept Mentor</h3>
                                                        <hr>
                                                        <!-- <span>Add <code>Delete</code> & Update</span> -->
                                                    </div>
                                                </div>
                                            </div>
                                          
                                    <!-- Page-header end -->

                                            <!-- Page body start -->
                                            
                                            <div class="container">
                                                
                                                    <div class="row row-centered" style="display: block;max-width: 800px; margin: 0px auto;">
                                                        
                                                           <!-- Request Mentor -- --------------- -->
                                                            <div  id="request_mentor_dialog" tabindex="-1" role="">
                                                                <div class="" role="document" style="width: auto;">
                                                                    <div class="">
                                                                        <!--   -->
                                                                        
                                                                        <div class="">
                                                                                 <p id="msg" class="border p-3 border-danger text-success err_toggle text-center hidden"></p>
                                                                                
                                                                                        <div style="width:150px; height:150px; display: block;margin-left: auto; margin-right: auto;">
                                                                                        <img style="width:auto; height:150px" class="card-img-top img-fluid img-thumbnail" src="{{ asset('') }}public/images/{{ $mentor[0]->image }}" alt="Card image cap">
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <h5 class="card-title mt-3 tb-3"> </h5>
                                                                                            <p style="height:60px;" class="card-text mt-3 mb-3 block-with-text">Suitable date and time for Metting with <code> {{$mentor[0]->name}} </code></p>
                                                                                        </div>

                                                                                        <table class="table">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th scope="col">#</th>
                                                                                                    <th scope="col">Date</th>
                                                                                                    <th scope="col">Start&nbspTime</th>
                                                                                                    <th scope="col">End&nbspTime</th>
                                                                                                    <th scope="col">Venue</th>
                                                                                                    <th scope="col">Approval</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                            <?php  $i = 1 ?>
                                                                                                @foreach ($mentor as $ment)
                                                                                                    <tr class="p-3">
                                                                                                        <th scope="row">{{$i}}</th>
                                                                                                        <td>{{$ment->date}}</td>
                                                                                                        <td>{{$ment->start_time}} </td>
                                                                                                        <td>{{$ment->end_time}}</td>
                                                                                                        <td>{{$ment->venu}}</td>
                                                                                                        <td class="text-right">
                                                                                                            @if($ment->approval)
                                                                                                                <span class="text-success">Selected</span>
                                                                                                            @endif
                                                                                                        </td>
                                                                                                        <td>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <?php $i = $i + 1 ?>
                                                                                                @endforeach
                                                                                            </tbody>
                                                                                        </table>
                                                                                        
                                                                        </div>
                                                                        
                                                                
                                                                    </div>
                                                                </div>
                                                            </div>   
                                                           <!-- End Request Mentor --------------- -->
                                                            
                                                            
                                                         
                                                    </div>
                                                
                                                <div class="text-right">
                                                   
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

<!--  form Create Post -->
      

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
        $('#form2').find('input').val('');
        $('#form2').find('select').val(''); 
        $('#form2').find('textarea').val('');
        $('#form2').find('input').removeClass("border border-danger");
        $('#form2').find('select').removeClass("border border-danger");
        $('#form2').find('textarea').removeClass("border border-danger");
    }

    function Delete_user(val)
    {
        $('#msgbox').modal('show');
        $('.form-horizontal').show();
        $('#del_id').val(val.id);
        $("#del_msg_success").html("<span class='text-warning'>Are you sure want to delete this ?</span>");
                   
    }

    //Show Request mentor Dialog
    $(document).ready(function(){     
        $("#request_mentor").click(function(){
            $('#request_mentor_dialog').modal('show');
            $('.form-horizontal').show();
            clear();
        });
    }) 

    function approve(val)
    {
            $('.err_toggle').addClass('hidden');
            $('#app'+val['id']).html('<i class="fa fa-spinner fa-spin"></i> Pls Wait...');
            $('#mrequest_mentor_ajax').removeClass('hidden');
            
            var data = new FormData();

            data.append('id',  val['id']);
            data.append('request_mentor',  val['request_mentor']);

            $.ajax({
               type : 'POST',
               url : '/accept/mentor',
               beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
               data: data,
               contentType: false,
               processData: false,
               success: function(data) {
                    $('#app'+val['id']).html('Approved');
               }
            }).fail(function (jqXHR, textStatus, error) {  
                    $('#msg').removeClass('hidden');
                    $("#msg").text("Error !"+error);
                    $('.mentor_modal_button').html('Submit');
                    $('#mrequest_mentor_ajax').removeClass('hidden');
                });
    }
</script>     


 <!-- end Add mentor -->
@endsection




