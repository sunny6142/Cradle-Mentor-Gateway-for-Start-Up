<?php
if(Auth::user()->roll == 3)  $val = "layouts.startup"; 
if(Auth::user()->roll == 2) $val = "layouts/mentor_header"; 
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
                                        <div class=" align-items-end">
                                           
                                           
                                    <!-- Page-header end -->

                                            <!-- Page body start -->
                                            
                                            <div class="container text-center" >
                                                
                                                <div class="" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                      <div class="" role="document">
                                                        <div class="modal-content">
                                                          
                                                            <div class="modal-body">
                                                               
                                                                <div class="text-center">
                                                                   @if($status) {{$msg}} @else Oops User Unidentified @endif
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
                
                                                   


 <!-- end Add mentor -->
@endsection

