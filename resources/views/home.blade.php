@extends('layouts.master')

@section('content')

                    <h4 class="page-title" style="border-bottom: 2px solid #817D79; color: #0D3645;"><strong>WELCOME BACK, DADDY {{ $user->name }}</strong></h4>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="widget-simple-chart text-right card-box">
                                <div class="circliful-chart" data-dimension="90" data-text="75%" data-width="5" data-fontsize="14" data-percent="75" data-fgcolor="#00B19D" data-bgcolor="#ebeff2"></div>
                                <h3 class="text-success counter"><strong>7</strong></h3>
                                <p class="text-dark"><strong>CURRENT LEVEL</strong></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="widget-simple-chart text-center card-box">
                                <h3 class="text-success">&#8358;<span class="counter">3,300,000</span></h3>
                                <p class="text-dark"><strong>TOTAL PAYOUTS</strong></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="card-box widget-icon">
                                <div>
                                    <i class="md md-account-child text-success"></i>
                                    <div class="wid-icon-info">
                                        <p class="text-dark m-b-5 font-13 text-uppercase"><strong>NO OF FAMILY MEMBERS</strong></p>
                                        <h4 class="m-t-0 m-b-5 text-success counter">1452</h4>
                                        <small class="text-danger"><b>39% Up</b></small>
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
                        <div class="col-md-8">
                            <div class="card-box">
                                <h4 class="text-dark  header-title m-t-0">FAMILY TREE</h4>
                                <p class="text-muted m-b-25 font-13">
                                    A view of your the highest 8 family members in your family tree
                                </p>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Member Name</th>
                                            <th>Reg Date</th>
                                            <th>level</th>
                                            <th>Status</th>
                                            <th>Phone No</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Kenneth James</td>
                                            <td>01/01/2016</td>
                                            <td>Level 5</td>
                                            <td><span class="label label-success">Active</span></td>
                                            <td>08134665041</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Helen Umeh</td>
                                            <td>01/01/2016</td>
                                            <td>Level 4</td>
                                            <td><span class="label label-warning">Inactive</span></td>
                                            <td>07032435256</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Edward Paul</td>
                                            <td>01/05/2016</td>
                                            <td>Level 4</td>
                                            <td><span class="label label-danger">Unpaid</span></td>
                                            <td>08112737372</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Tolu Pitan</td>
                                            <td>01/01/2016</td>
                                            <td>Level 3</td>
                                            <td><span class="label label-success">Active</span></td>
                                            <td>08126642882</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Suzan Efosa</td>
                                            <td>01/01/2016</td>
                                            <td>Level 3</td>
                                            <td><span class="label label-warning">Inactive</span></td>
                                            <td>08121663372</td>
                                        </tr>

                                        <tr>
                                            <td>6</td>
                                            <td>David Anevho</td>
                                            <td>01/01/2016</td>
                                            <td>Level 3</td>
                                            <td><span class="label label-danger">Unpaid</span></td>
                                            <td>09022647282</td>
                                        </tr>

                                        <tr>
                                            <td>7</td>
                                            <td>Freedom Eriya</td>
                                            <td>01/01/2016</td>
                                            <td>Level 2</td>
                                            <td><span class="label label-success">Active</span></td>
                                            <td>0102293992</td>
                                        </tr>

                                        <tr>
                                            <td>8</td>
                                            <td>Ibukun Oyekan</td>
                                            <td>01/01/2016</td>
                                            <td>Level 2</td>
                                            <td><span class="label label-warning">Inactive</span></td>
                                            <td>07022882249</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="m-b-30" style="background-image: url(assets/images/ask.jpg); background-size:cover; background-position:center center; height:200px;">

                            </div>

                            <div  style="background-image: url(assets/images/give.jpg); background-size:cover; background-position:center center; height:200px;">
                                <div class="panel-body ">
                                </div>
                            </div>
                        </div>
                    </div>

    @stop