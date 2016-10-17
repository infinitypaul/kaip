@extends('layouts.master')

@section('content')
                        <div class="panel panel-border panel-inverse">
                            <div class="panel-heading">
                                <h3 class="panel-title">Update your profile information</h3>
                            </div>
                            <div class="panel-body">
                                @include('layouts.success')
                                @include('layouts.error')
                                <div class="row">
                                    {!!   Form::model($user, ['method'=>'PATCH', 'class' => 'form-horizontal', 'id'=>'form-sign-up', 'enctype'=>'multipart/form-data', 'action'=>['UserController@update', $user->id]]) !!}

                                    {{ csrf_field()}}

                                    <div class="col-md-2" style="width:128; height: 128px;">
                                        <img src="{{ $user->location }}" class="thumbnail" height="200">
                                        <div class="fileUpload btn btn-danger">

                                            {!! Form::uploadcare('image', null, array('data-crop' => '3:4')) !!}
                                        </div>
                                    </div>




                                    <div class="col-md-9">

                                            <div class="form-group">
                                                <label class="col-sm-5 control-label">First Name</label>
                                                <div class="col-sm-7">
                                                    <input class="form-control" type="text" value="" placeholder="{{ $user->firstname }}" name="firstname">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-5 control-label">Last Name</label>
                                                <div class="col-sm-7">
                                                    <input class="form-control" type="text" value="" placeholder="{{ $user->lastname }}" name="lastname">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-5 control-label">Email Address</label>
                                                <div class="col-sm-7">
                                                    <input class="form-control" type="Email" value="" placeholder="{{ $user->email }}" name="email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-5 control-label">Phone Number</label>
                                                <div class="col-sm-7">
                                                    <input class="form-control" type="number" value="" placeholder="{{ $user->mobile }}" name="mobile">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-5 control-label">Area Of Interest</label>
                                                <div class="col-sm-7">
                                                    <select class="form-control" name="aoi">
                                                        <option>Farming</option>
                                                        <option>Transport</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-5 control-label">Sex</label>
                                                <div class="col-sm-7">
                                                    <div class="radio radio-inline radio-warning">
                                                        <input type="radio" id="male" value="m" name="gender" checked="">
                                                        <label for="male"> Male </label>
                                                    </div>
                                                    <div class="radio radio-inline radio-warning">
                                                        <input type="radio" id="female" value="f" name="gender">
                                                        <label for="female"> Female </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-5 control-label">Date Of Birth</label>
                                                <div class="col-sm-7">
                                                    <input class="form-control" type="date" value="" placeholder="{{ $user->dob }}" name="dob">
                                                </div>
                                            </div>

                                            <div class="panel panel-border panel-inverse">
                                                <div class="panel-heading">
                                                    <h5>NEXT OF KIN INFORMATION</h5>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <label class="col-sm-5 control-label">First Name</label>
                                                        <div class="col-sm-7">
                                                            <input class="form-control" type="text" value="" placeholder="{{ $user->nok_fn }}" name="nok_fn">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-5 control-label">Last Name</label>
                                                        <div class="col-sm-7">
                                                            <input class="form-control" type="text" value="" placeholder="{{ $user->nok_ln }}" name="nok_ln">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-5 control-label">Phone Number</label>
                                                        <div class="col-sm-7">
                                                            <input class="form-control" type="number" value="" placeholder="{{ $user->nok_pn }}" name="nok_pn">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-5 control-label">Address</label>
                                                        <div class="col-sm-7">
                                                            <textarea class="form-control" rows="5" placeholder="{{ $user->nok_add }}" name="nok_add"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="panel panel-border panel-inverse">
                                            <div class="panel-heading">
                                                <h5>Change Password</h5>
                                            </div>
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">New Password Name</label>
                                                    <div class="col-sm-7">
                                                        <input class="form-control" type="text" value="" placeholder="" name="password">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">Retype Password</label>
                                                    <div class="col-sm-7">
                                                        <input class="form-control" type="text" value="" placeholder="" name="repassword">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                            <div class="form-group text-right m-t-20">
                                                <div class="col-xs-12">
                                                    <button class="btn btn-primary btn-custom w-md waves-effect waves-light" type="submit"><strong>UPDATE PROFILE</strong>
                                                    </button>
                                                </div>
                                            </div>
                                        {!!  Form::close()  !!}
                                        {!! Uploadcare::scriptTag() !!}

                            </div>
                        </div>
    @stop