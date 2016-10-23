@extends('layouts.master')

@section('content')

                    <h4 class="page-title" style="background-color:#154604; color:#fff; padding: 10px;"><strong>Welcome Back, {{  AllFunction::Level($mycount, $user->gender) }}, {{ $user->name }}</strong></h4>

                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="widget-simple-chart text-right card-box">
                                <div class="circliful-chart" data-dimension="90" data-text="75%" data-width="5" data-fontsize="14" data-percent="75" data-fgcolor="#154604" data-bgcolor="#ebeff2"></div>
                                <h3 class="text-inverse counter"><strong>{{  AllFunction::MyLevel($mycount) }}</strong></h3>
                                <p class="text-dark"><strong>CURRENT LEVEL</strong></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="widget-simple-chart text-center card-box">
                                <h3 class="text-inverse">&#8358;<span class="counter">0</span></h3>
                                <p class="text-dark"><strong>TOTAL PAYOUTS</strong></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="card-box widget-icon">
                                <div>
                                    <i class="md md-account-child text-primary"></i>
                                    <div class="wid-icon-info">
                                        <p class="text-dark m-b-5 font-13 text-uppercase"><strong>NO OF FAMILY MEMBERS</strong></p>
                                        <h4 class="m-t-0 m-b-5 text-inverse counter">{{ $mycount }}</h4>
                                        <small class="text-danger"><b>{{ $mycount }}% Up</b></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row hidden-sm m-b-30">
                        <div class="col-md-12 controls">
                            <input class="required form-control" type="text" placeholder="Search..." style="background-color: #fff; border-radius: 30px; border: 1px solid #ddd;">
                            <a href="#"><i class="fa fa-search form-control-feedback l-h-34" style="margin-right: 30px;"></i></a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-box">
                                <h4 class="text-dark  header-title m-t-0">FAMILY TREE</h4>
                                <p class="text-muted m-b-25 font-13">
                                    A view of your the highest 8 family members in your family tree
                                </p>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>User Code</th>
                                            <th>Member Name</th>
                                            <th>Reg Date</th>
                                            <th>level</th>
                                            <th>Status</th>
                                            <th>Phone No</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($notification as $notify)
                                            @foreach($notify->user as $virtual)
                                        <tr>
                                            <td>{{ $user->user_code }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->created_at->diffForHumans() }}</td>
                                            <td>Level <?php
                                                AllFunction::MyLevel($counto) ?></td>
                                            <td><span class="label label-success">Active</span></td>
                                            <td>{{ $user->mobile }}</td>
                                        </tr>
                                                @endforeach
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-md-4">
                           <a href="{{ action('UserController@GiveHelp') }}"> <div class="m-b-30" style="background-image: url(assets/images/ask.jpg); background-size:cover; background-position:center center; height:200px;">

                            </div></a>

                            <div  style="background-image: url(assets/images/give.jpg); background-size:cover; background-position:center center; height:200px;">
                                <div class="panel-body ">
                                </div>
                            </div>
                        </div>
                    </div> -->

    @stop