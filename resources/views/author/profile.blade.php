@extends('admin.layouts.app')
@section('title','Profile')
	
@push('css')
	{{-- expr --}}
@endpush

@section('content')
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Profile</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Profile</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="ibox">
                            <div class="ibox-body text-center">
                                <div class="m-t-20">
                                    <img class="img-circle" src="{{ asset('images/user/'.Auth::user()->image) }}" />
                                </div>
                                <h5 class="font-strong m-b-10 m-t-10">{{ Auth::user()->username }}</h5>
                                <div class="m-b-20 text-muted">Web Developer</div>
                                <div class="profile-social m-b-20">
                                    <a href="javascript:;"><i class="fa fa-twitter"></i></a>
                                    <a href="javascript:;"><i class="fa fa-facebook"></i></a>
                                    <a href="javascript:;"><i class="fa fa-pinterest"></i></a>
                                    <a href="javascript:;"><i class="fa fa-dribbble"></i></a>
                                </div>
                                <div>
                                    <button class="btn btn-info btn-rounded m-b-5"><i class="fa fa-plus"></i> Follow</button>
                                    <button class="btn btn-default btn-rounded m-b-5">Message</button>
                                </div>
                            </div>
                        </div>
                        <div class="ibox">
                            <div class="ibox-body">
                                <div class="row text-center m-b-20">
                                    <div class="col-4">
                                        <div class="font-24 profile-stat-count">140</div>
                                        <div class="text-muted">Followers</div>
                                    </div>
                                    <div class="col-4">
                                        <div class="font-24 profile-stat-count">$780</div>
                                        <div class="text-muted">Sales</div>
                                    </div>
                                    <div class="col-4">
                                        <div class="font-24 profile-stat-count">15</div>
                                        <div class="text-muted">Projects</div>
                                    </div>
                                </div>
                                <p class="text-center">Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has been</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="ibox">
                            <div class="ibox-body">
                                <ul class="nav nav-tabs tabs-line">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#tab-1" data-toggle="tab"><i class="ti-bar-chart"></i> Profile Info</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-2" data-toggle="tab"><i class="ti-announcement"></i> Update Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-3" data-toggle="tab"><i class="ti-settings"></i> Change Password</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tab-1">
                                        <div class="row">
                                            <div class="col-md-6" style="border-right: 1px solid #eee;">
                                                <h5 class="text-info m-b-20 m-t-10"><i class="fa fa-bar-chart"></i> Month Statistics</h5>
                                                <div class="h2 m-0">$12,400<sup>.60</sup></div>
                                                <div><small>Month income</small></div>
                                                <div class="m-t-20 m-b-20">
                                                    <div class="h4 m-0">120</div>
                                                    <div class="d-flex justify-content-between"><small>Month income</small>
                                                        <span class="text-success font-12"><i class="fa fa-level-up"></i> +24%</span>
                                                    </div>
                                                    <div class="progress m-t-5">
                                                        <div class="progress-bar progress-bar-success" role="progressbar" style="width:50%; height:5px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="m-b-20">
                                                    <div class="h4 m-0">86</div>
                                                    <div class="d-flex justify-content-between"><small>Month income</small>
                                                        <span class="text-warning font-12"><i class="fa fa-level-down"></i> -12%</span>
                                                    </div>
                                                    <div class="progress m-t-5">
                                                        <div class="progress-bar progress-bar-warning" role="progressbar" style="width:50%; height:5px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <ul class="list-group list-group-full list-group-divider">
                                                    <li class="list-group-item">Projects
                                                        <span class="pull-right color-orange">15</span>
                                                    </li>
                                                    <li class="list-group-item">Tasks
                                                        <span class="pull-right color-orange">148</span>
                                                    </li>
                                                    <li class="list-group-item">Articles
                                                        <span class="pull-right color-orange">72</span>
                                                    </li>
                                                    <li class="list-group-item">Friends
                                                        <span class="pull-right color-orange">44</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <h5 class="text-info m-b-20 m-t-10"><i class="fa fa-user-plus"></i> Latest Followers</h5>
                                                <ul class="media-list media-list-divider m-0">
                                                    <li class="media">
                                                        <a class="media-img" href="javascript:;">
                                                            <img class="img-circle" src="./assets/img/users/u1.jpg" width="40" />
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="media-heading">Jeanne Gonzalez <small class="float-right text-muted">12:05</small></div>
                                                            <div class="font-13">Lorem Ipsum is simply dummy text of the printing and typesetting.</div>
                                                        </div>
                                                    </li>
                                                    <li class="media">
                                                        <a class="media-img" href="javascript:;">
                                                            <img class="img-circle" src="./assets/img/users/u2.jpg" width="40" />
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="media-heading">Becky Brooks <small class="float-right text-muted">1 hrs ago</small></div>
                                                            <div class="font-13">Lorem Ipsum is simply dummy text of the printing and typesetting.</div>
                                                        </div>
                                                    </li>
                                                    <li class="media">
                                                        <a class="media-img" href="javascript:;">
                                                            <img class="img-circle" src="./assets/img/users/u3.jpg" width="40" />
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="media-heading">Frank Cruz <small class="float-right text-muted">3 hrs ago</small></div>
                                                            <div class="font-13">Lorem Ipsum is simply dummy.</div>
                                                        </div>
                                                    </li>
                                                    <li class="media">
                                                        <a class="media-img" href="javascript:;">
                                                            <img class="img-circle" src="./assets/img/users/u6.jpg" width="40" />
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="media-heading">Connor Perez <small class="float-right text-muted">Today</small></div>
                                                            <div class="font-13">Lorem Ipsum is simply dummy text of the printing and typesetting.</div>
                                                        </div>
                                                    </li>
                                                    <li class="media">
                                                        <a class="media-img" href="javascript:;">
                                                            <img class="img-circle" src="./assets/img/users/u5.jpg" width="40" />
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="media-heading">Bob Gonzalez <small class="float-right text-muted">Today</small></div>
                                                            <div class="font-13">Lorem Ipsum is simply dummy.</div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="tab-pane fade" id="tab-2">
                                            <div class="row">
                                                <form method="POST" action="{{ route('author.profile.update') }}" class="form-horizontal" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                                <div class="col-sm-6 form-group">
                                                    <label>Your Name</label>
                                                    <input name="name" class="form-control" type="text" value="{{ Auth::user()->name }}">
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                    <label>Email</label>
                                                    <input name="email" class="form-control" type="text" value="{{ Auth::user()->email }}">
                                                </div>
                                            <div class="form-group">
                                                <label>About Yourself</label>
                                                <textarea rows="5" name="about" class="form-control">{{ Auth::user()->about }}</textarea>
                                            </div>
                                            <img src="{{ asset('images/user/'.Auth::user()->image) }}"
                                        style="height: 100px; width: 400px;">
                                        <br/>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="file" name="image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">UPDATE</button>
                                            </div>
                                        </form>
                                    </div>
                                    </div>




                                    <div class="tab-pane fade" id="tab-3">
                                        <h5 class="text-info m-b-20 m-t-20"><i class="fa fa-bullhorn"></i> Latest Feeds</h5>
                                        <ul class="media-list media-list-divider m-0">
                                            <li class="media">
                                                <div class="media-img"><i class="ti-user font-18 text-muted"></i></div>
                                                <div class="media-body">
                                                    <div class="media-heading">New customer <small class="float-right text-muted">12:05</small></div>
                                                    <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-img"><i class="ti-info-alt font-18 text-muted"></i></div>
                                                <div class="media-body">
                                                    <div class="media-heading text-warning">Server Warning <small class="float-right text-muted">12:05</small></div>
                                                    <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-img"><i class="ti-announcement font-18 text-muted"></i></div>
                                                <div class="media-body">
                                                    <div class="media-heading">7 new feedback <small class="float-right text-muted">Today</small></div>
                                                    <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-img"><i class="ti-check font-18 text-muted"></i></div>
                                                <div class="media-body">
                                                    <div class="media-heading text-success">Issue fixed <small class="float-right text-muted">12:05</small></div>
                                                    <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-img"><i class="ti-shopping-cart font-18 text-muted"></i></div>
                                                <div class="media-body">
                                                    <div class="media-heading">7 New orders <small class="float-right text-muted">12:05</small></div>
                                                    <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-img"><i class="ti-reload font-18 text-muted"></i></div>
                                                <div class="media-body">
                                                    <div class="media-heading text-danger">Server warning <small class="float-right text-muted">12:05</small></div>
                                                    <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    .profile-social a {
                        font-size: 16px;
                        margin: 0 10px;
                        color: #999;
                    }

                    .profile-social a:hover {
                        color: #485b6f;
                    }

                    .profile-stat-count {
                        font-size: 22px
                    }
                </style>
                <div>
                  
                </div>
            </div>
           
@endsection

@push('js')
	{{-- expr --}}
@endpush