@extends('layouts.admin_header')

@section('content')
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Welcome Admin</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="glyphicon glyphicon-user f-s-40 color-primary"></i></span>
                                </div>
                                <a href="/admin/list/startup" class="media-body media-text-right">
                                    <h2>{{$users}}</h2>
                                    <p class="m-b-0">Total Startup</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-user f-s-40 color-danger"></i></span>
                                </div>
                                <a href="/list/mentor" class="media-body media-text-right">
                                    <h2>{{$mentor}}</h2>
                                    <p class="m-b-0">Total Mentor</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                                </div>
                                <a href="/admin/approval" class="media-body media-text-right">
                                    <h2>{{$approval}}</h2>
                                    <p class="m-b-0">Total Request</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    {{--
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-user f-s-40 color-danger"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>AS</h2>
                                    <p class="m-b-0">Approval Startup</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>

            <!-- Mentor List -->
                <div class="row">
					<div class="col-lg-3">
                        <div class="card bg-dark">
                            <div class="testimonial-widget-one p-17">
                                <div class="testimonial-widget-one owl-carousel owl-theme">
                                    @foreach ($mentor_list as $ment)
                                        <div class="item">
                                            <div class="testimonial-content">
                                                <img class="testimonial-author-img" src="{{ asset('') }}public/images/{{ $ment->image }}" alt="" />
                                                <div class="testimonial-author">{{$ment->name}}</div>
                                                <div class="testimonial-author-position">{{$ment->designation}}</div>

                                                <div class="testimonial-text">
                                                    <i class="fa fa-quote-left"></i>  {{$ment->about_you}}
                                                    <i class="fa fa-quote-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-title">
                                <h4>Mentor List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th class="text-success">Company</th>
                                                <th class="text-danger">Created</th>
                                                <th class="text-left">Info</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($mentor_list as $ment)
                                                <tr>
                                                    <td>
                                                        <div class="round-img">
                                                            <a href=""><img src="{{ asset('') }}public/images/{{ $ment->image }}" alt=""></a>
                                                        </div>
                                                    </td>
                                                    <td>{{ $ment->name }} </td>
                                                    <td class="text-success">{{ $ment->company_name}} </td>
                                                    <td class="text-danger">{{ $ment->created_at }} </td>
                                                    <td class="text-left">
                                                        <a href="/list/connection/{{$ment->id}}" class="btn btn-primary btn-sm" >
                                                            <i class="glyphicon glyphicon-info-sign"></i>
                                                        </a>
                                                        <a  href="{{ URL::to('/view/mentor/'.$ment->id) }}" class="btn btn-info btn-sm" >
                                                            <i class="glyphicon glyphicon-eye-open"></i>
                                                        </a>
                                                        <a  href="{{ URL::to('/edit/mentor/'.$ment->id) }}" class="btn btn-warning btn-sm" >
                                                            <i class="glyphicon glyphicon-pencil"></i>
                                                        </a>
                                                                       
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- End Mentor List -->
            <!-- Startup List -->
            <div class="row">
                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-title">
                                <h4>Start List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th class="text-success">Startup</th>
                                                <th class="text-danger">Created</th>
                                                <th class="text-left">Info</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($startup as $start)
                                                <tr>
                                                    <td>
                                                        <div class="round-img">
                                                            <a href=""><img src="{{ asset('') }}public/images/{{ $start->logo }}" alt=""></a>
                                                        </div>
                                                    </td>
                                                    <td>{{ $start->name }} </td>
                                                    <td class="text-success">{{ $start->start_up_name}} </td>
                                                    <td class="text-danger">{{ $start->created_at }} </td>
                                                    <td class="text-left">
                                                        <a href="/list/startup/connection/{{$start->id}}" class="btn btn-primary btn-sm" >
                                                            <i class="glyphicon glyphicon-info-sign"></i>
                                                        </a>
                                                        <a href="/admin/view/user/profile/{{$start->id}}" class="btn btn-info btn-sm" >
                                                            <i class="glyphicon glyphicon-eye-open"></i>
                                                        </a>
                                                                       
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card bg-dark">
                            <div class="testimonial-widget-one p-17">
                                <div class="testimonial-widget-one owl-carousel owl-theme">
                                    @foreach ($startup as $start)
                                        <div class="item">
                                            <div class="testimonial-content">
                                                <img class="testimonial-author-img" src="{{ asset('') }}public/images/{{ $start->logo }}" alt="" />
                                                <div class="testimonial-author">{{$start->name}}</div>
                                                <div class="testimonial-author-position">{{$start->start_up_name}}</div>

                                                <div class="testimonial-text">
                                                    <i class="fa fa-quote-left"></i>  {{$start->about_your_startup}}
                                                    <i class="fa fa-quote-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- End Startup List -->
                {{--
                <div class="row">
					<div class="col-lg-8">
						<div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-title">
                                        <h4>Message </h4>
                                    </div>
                                    <div class="recent-comment">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#"><img alt="..." src="images/avatar/1.jpg" class="media-object"></a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">john doe</h4>
                                                <p>Cras sit amet nibh libero, in gravida nulla. </p>
                                                <p class="comment-date">October 21, 2018</p>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#"><img alt="..." src="images/avatar/1.jpg" class="media-object"></a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">john doe</h4>
                                                <p>Cras sit amet nibh libero, in gravida nulla. </p>
                                                <p class="comment-date">October 21, 2018</p>
                                            </div>
                                        </div>

                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#"><img alt="..." src="images/avatar/1.jpg" class="media-object"></a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">john doe</h4>
                                                <p>Cras sit amet nibh libero, in gravida nulla. </p>
                                                <p class="comment-date">October 21, 2018</p>
                                            </div>
                                        </div>

                                        <div class="media no-border">
                                            <div class="media-left">
                                                <a href="#"><img alt="..." src="images/avatar/1.jpg" class="media-object"></a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Mr. Michael</h4>
                                                <p>Cras sit amet nibh libero, in gravida nulla. </p>
                                                <div class="comment-date">October 21, 2018</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /# card -->
                            </div>
                            <!-- /# column -->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="year-calendar"></div>
                                    </div>
                                </div>
                            </div>


						</div>
					</div>

				    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Todo</h4>
                                <div class="card-content">
                                    <div class="todo-list">
                                        <div class="tdl-holder">
                                            <div class="tdl-content">
                                                <ul>
                                                    <li>
                                                        <label>
															<input type="checkbox"><i class="bg-primary"></i><span>Build an angular app</span>
															<a href='#' class="ti-close"></a>
														</label>
                                                    </li>
                                                    <li>
                                                        <label>
															<input type="checkbox" checked><i class="bg-success"></i><span>Creating component page</span>
															<a href='#' class="ti-close"></a>
														</label>
                                                    </li>
                                                    <li>
                                                        <label>
															<input type="checkbox" checked><i class="bg-warning"></i><span>Follow back those who follow you</span>
															<a href='#' class="ti-close"></a>
														</label>
                                                    </li>
                                                    <li>
                                                        <label>
															<input type="checkbox" checked><i class="bg-danger"></i><span>Design One page theme</span>
															<a href='#' class="ti-close"></a>
														</label>
                                                    </li>

                                                    <li>
                                                        <label>
															<input type="checkbox" checked><i class="bg-success"></i><span>Creating component page</span>
															<a href='#' class="ti-close"></a>
														</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <input type="text" class="tdl-new form-control" placeholder="Type here">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>--}}
                <!-- End PAge Content -->
            </div>
           
@endsection


