<!DOCTYPE html>
<html style="background-color: #222; background-image: url(assets/images/main-bg.jpg); background-size:cover; background-position:center center;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="assets/images/favicon_1.ico">

    <title>MLF | Register</title>

      <!-- Plugins css -->
<!--     <link href="assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet"> -->
    <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css">
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css">
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">

    <script src="assets/js/modernizr.min.js"></script>

    <!-- Main  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/detect.js"></script> 
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->


</head>
<body style="background-color:transparent;">

<div class="wrapper-page" style="width:60%;">

    <div class="text-center">
        <a href="index.html" class="logo logo-lg"><i class="md md-equalizer"></i> <span>MLF</span> </a>
    </div>
    <div>
        <!-- <h4 class="text-dark  header-title m-t-0">Wizard With Form Validation</h4>
        <p class="text-muted m-b-25 font-13">
            Same with basic wizard setup but with progress bar.
        </p> -->

        <form id="commentForm" method="post"  class="form-horizontal" action="{{ url('/register') }}">
            {{ csrf_field() }}
            <div id="rootwizard" class="pull-in">
                <ul>
                    <li><a href="#first" style=" pointer-events: none; cursor: default;" data-toggle="tab" disabled><strong>BASIC DETAILS</strong></a></li>
                    <li><a href="#second" style=" pointer-events: none; cursor: default;" data-toggle="tab"><strong>BANK DETAILS</strong></a></li>
                    <li><a href="#third" style=" pointer-events: none; cursor: default;" data-toggle="tab"><strong>REGISTRATION MODE</strong></a></li>
                </ul>
                <div class="tab-content m-b-0 bx-s-0">
                    <div class="tab-pane fade" id="first">
                        @include('layouts.emessage')
                        @include('layouts.error')
                        <div class="form-group">
                            <div class="col-md-6 col-sm-12 controls{{ $errors->has('FirstName') ? ' has-error' : '' }}">
                                <input id="firstnamefield" name="FirstName" class="required form-control" aria-required="true" value="{{ old('FirstName') }}" type="text" placeholder="First Name">

                                <i class="md md-account-circle form-control-feedback l-h-34"></i>
                                @if ($errors->has('FirstName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('FirstName') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6 col-sm-12 controls{{ $errors->has('LastName') ? ' has-error' : '' }}">
                                <input id="lastnamefield" name="LastName" class="required form-control" aria-required="true" type="text" value="{{ old('LastName') }}" placeholder="Last Name">

                                <i class="md md-account-circle form-control-feedback l-h-34"></i>
                                @if ($errors->has('LastName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('LastName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12 col-md-6 controls{{ $errors->has('Email') ? ' has-error' : '' }}">
                                <input id="emailfield" name="Email" class="required form-control" aria-required="true" type="text" placeholder="Email Address" value="{{ old('Email') }}">
                                <i class="md md-email form-control-feedback l-h-34"></i>
                                @if ($errors->has('Email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-3 col-sm-6 controls{{ $errors->has('PhoneNumber') ? ' has-error' : '' }}">
                                <input id="phonenofield" name="PhoneNumber" class="required form-control" aria-required="true" type="text" placeholder="Phone Number" data-mask="99999999999"  value="{{ old('PhoneNumber') }}">
                                <i class="md md-phone form-control-feedback l-h-34"></i>
                                <span class="font-13 text-muted">Phone No: 999 9999-9999</span>
                                @if ($errors->has('PhoneNumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('PhoneNumber') }}</strong>
                                    </span>
                                @endif
                                <span id="note"></span>
                            </div>
                            <div class="col-md-1 col-sm-6 controls">
                                <button id="verify" type="button" class="btn btn-warning btn-custom waves-effect w-md waves-light">Verify Number</button>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12 col-md-6 controls{{ $errors->has('Code') ? ' has-error' : '' }}">
                                <input id="vercodefield" name="Code" class="required form-control" aria-required="true" type="text" placeholder="Verification Code" value="{{ old('Code') }}">
                                <i class="md md-textsms form-control-feedback l-h-34"></i>
                                @if ($errors->has('Code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Code') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-sm-12 col-md-6 controls{{ $errors->has('Password') ? ' has-error' : '' }}">
                                <input id="passwdfield" name="Password" class="required form-control" aria-required="true" type="password" placeholder="Password">
                                <i class="md md-vpn-key form-control-feedback l-h-34"></i>
                                <span class="font-13 text-muted text-inverse">Minimum of six characters</span>
                                @if ($errors->has('Password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12 col-md-6 controls">
                                <!-- <input class="required form-control" type="date" required="" placeholder="Area Of Interest"> -->
                                <div class="controls{{ $errors->has('aoi') ? ' has-error' : '' }}">
                                    <select class="form-control" name="aoi">
                                        <option>Area of Interest</option>
                                        <option>Farming</option>
                                        <option>Transport</option>
                                    </select>
                                    @if ($errors->has('aoi'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('aoi') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <i class="fa fa-building-o form-control-feedback l-h-34"></i>
                            </div>
                            <div class="col-sm-12 col-md-6 controls{{ $errors->has('RePassword') ? ' has-error' : ''
                            }}">
                                <input id="passwdfield" name="RePassword" class="required form-control" aria-required="true" type="password" placeholder="Retype Password">
                                <i class="md md-vpn-key form-control-feedback l-h-34"></i>
                                @if ($errors->has('RePassword'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('RePassword') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12 col-md-6 {{ $errors->has('dob') ? ' has-error' : '' }}">
                                <label class="control-label">Date Of Birth</label>
                                <input id="dobfield" name="dob" class="required form-control" aria-required="true" type="date" placeholder="Date of Birth" data-mask="99/99/9999" value="{{ old('dob') }}">

                                <!-- <div class="input-group">
                                    <input name="dob" type="text" class="required form-control" placeholder="mm/dd/yyyy" id="dobfield" value="{{ old('dob') }}">
                                    <span class="input-group-addon bg-primary b-0 text-white"><i class="ion-calendar"></i></span>
                                </div> -->
                                <!-- <i class="md md-alarm-on form-control-feedback l-h-34"></i> -->
                                @if ($errors->has('dob'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="col-sm-6 form-inline controls{{ $errors->has('gender') ? ' has-error' : '' }}">
                                <label>Gender: </label>
                                <div class="radio radio-inline radio-warning">
                                    <input type="radio" id="male" value="option1" name="gender" checked="">
                                    <label for="male"> Male </label>
                                </div>
                                <div class="radio radio-inline radio-warning">
                                    <input type="radio" id="female" value="option2" name="gender">
                                    <label for="female"> Female </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">

                        </div>

                        <div class="panel panel-border panel-primary">
                            <div class="panel-heading">
                                <h5>
                                    NEXT OF KIN INFORMATION
                                </h5>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-12 controls{{ $errors->has('nokfn') ? ' has-error' : '' }}">
                                        <input id="Nxtfirstnamefield" name="nokfn" class="required form-control" aria-required="true" type="text" placeholder="First Name" value="{{ old('nokfn') }}">
                                        <i class="md md-account-circle form-control-feedback l-h-34"></i>
                                        @if ($errors->has('nokfn'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('nokfn') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6 col-sm-12 controls{{ $errors->has('nokln') ? ' has-error' :
                                    '' }}">
                                        <input id="Nxtlastnamefield" name="nokln" class="required form-control" aria-required="true" type="text" placeholder="Last Name" value="{{ old('nokln') }}">
                                        <i class="md md-account-circle form-control-feedback l-h-34"></i>
                                        @if ($errors->has('nokln'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('nokln') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 controls{{ $errors->has('nokpn') ? ' has-error' : '' }}">
                                        <input id="Nxtphonenofield" name="nokpn" class="required form-control" aria-required="true" type="text" placeholder="Phone Number" data-mask="99999999999" value="{{ old('nokpn') }}">
                                        <span class="font-13 text-muted">Phone No: 999 9999-9999</span>
                                        <i class="md md-phone form-control-feedback l-h-34"></i>
                                        @if ($errors->has('nokpn'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('nokpn') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 controls{{ $errors->has('nokadd') ? ' has-error' : '' }}">
                                        <label>NEXT OF KIN ADDRESS</label>
                                        <textarea id="Nxtaddfield" name="nokadd" class="required form-control" aria-required="true" rows="5">{{ old('nokadd') }}</textarea>
                                        @if ($errors->has('nokadd'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('nokadd') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane fade" id="second">

                        <div class="form-group">
                            <div class="col-sm-12 col-md-12 controls">
                                <!-- <input class="required form-control" type="date" required="" placeholder="Area Of Interest"> -->
                                <div class="controls{{ $errors->has('aoi') ? ' has-error' : '' }}">
                                    <select class="required form-control" id="bnknamefield" name="bn" >
                                        <option>Select Bank</option>
                                        <option>Access Bank Plc</option>
                                        <option>Citibank Nigeria Limited</option>
                                        <option>Diamond Bank Plc</option>
                                        <option>Ecobank Nigeria Plc</option>
                                        <option>Enterprise Bank</option>
                                        <option>Fidelity Bank Plc</option>
                                        <option>First City Monument Bank Plc</option>
                                        <option>Guaranty Trust Bank Plc</option>
                                        <option>Heritage Banking Company Ltd</option>
                                        <option>Key Stone Bank</option>
                                        <option>MainStreet Bank</option>
                                        <option>Skye Bank Plc</option>
                                        <option>Stanbic IBTC Bank Ltd.</option>
                                        <option>Standard Chartered Bank Nigeria Ltd</option>
                                        <option>Sterling Bank Plc</option>
                                        <option>SunTrust Bank Nigeria Limited</option>
                                        <option>Union Bank of Nigeria Plc</option>
                                        <option>United Bank For Africa Plc</option>
                                        <option>Unity Bank Plc</option>
                                        <option>Wema Bank Plc</option>
                                        <option>Zenith Bank Plc</option>
                                    </select>
                                   @if ($errors->has('bn'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bn') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <i class="md md-account-balance form-control-feedback l-h-34"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12 col-md-6 controls{{ $errors->has('an') ? ' has-error' : '' }}">
                                <input id="bnkaccnamefield" name="an" class="required form-control" aria-required="true" type="text" required="" placeholder="Bank Account Name" value="{{ old('an') }}">
                                <i class="md md-account-child form-control-feedback l-h-34"></i>
                                @if ($errors->has('an'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('an') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-sm-12 col-md-6 controls{{ $errors->has('ban') ? ' has-error' : '' }}">
                                <input id="bnkaccnofield" name="ban" class="required form-control" aria-required="true" type="text" required="" placeholder="Bank Acc No" data-mask="9999999999" value="{{ old('ban') }}">
                                <i class="md md-credit-card form-control-feedback l-h-34"></i>
                                <span class="font-13 text-muted">Bank Account No: 123 4567 890</span>
                                @if ($errors->has('ban'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ban') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="third">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label class="control-label" for="refer">Select Your Mode Of Registration</label>
                                <div class="controls{{ $errors->has('refer') ? ' has-error' : '' }}">
                                    <select class="form-control" name="refer" id="refer" onchange="changer();">
                                        <option value="1" @if (old('refer') == '1') selected="selected" @endif>Through Referral</option>
                                        <option value="0" @if (old('refer') == '0') selected="selected" @endif>Without Referral</option>
                                    </select>
                                    @if ($errors->has('refer'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('refer') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group" id="rcing">
                            <div class="col-md-12{{ $errors->has('rc') ? ' has-error' : '' }}">
                                <input class="required form-control input-sm" name="rc" type="text"
                                       placeholder="Referral Code" id="rc" value="{{ old('rc') }}">
                                <i class="md md-alarm-on form-control-feedback l-h-34"></i>
                                @if ($errors->has('rc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="panel panel-border panel-primary">
                            <div class="panel-heading">
                                <h5>OTHER INFORMATION</h5>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-md-12 m-b-15">
                                        <label class="control-label">Registration Category</label>
                                        <div class="controls">
                                            <select name="regcat" class="form-control" id="cate" onchange="changer2();">
                                                <option value="">Select Category</option>
                                                <option value="0">5 Million</option>
                                                <option value="1">10 Million</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <!-- <label><strong>TERMS AND CONDITONS</strong></label> -->
                                        <p id="terms"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <input class="btn btn-success" value="Finish" name="submit" type="submit" >

                            </div>
                        </div>
                    </div>



                    <ul class="pager m-b-0 wizard">
                        <li class="previous"><a href="#" class="btn btn-primary waves-effect waves-light">Previous</a></li>
                        <li class="next"><a href="#" class="btn btn-primary waves-effect waves-light">Next</a></li>
                    </ul>
                </div>
            </div>
        </form>

    </div><br/>
    <!--
                <div class="form-group">
                    <div class="col-sm-12">
                        <div>
                            <input type="checkbox" checked="checked" data-plugin="switchery" data-color="#ef5350">
                            <label style="padding-left:20px;">
                                I accept <a href="#">Terms and Conditions</a>
                            </label>
                        </div>

                    </div>
                </div>
    -->

    <!-- <div class="form-group text-right m-t-20">
        <div class="col-xs-12">
            <button class="btn btn-primary btn-custom waves-effect waves-light w-md" type="submit">Register</button>
        </div>
    </div> -->

    <div class="form-group m-t-30">
        <div class="col-sm-12 text-center">
            <a href="login" class="text-muted">Already have account?</a>
        </div>
    </div>

</div>


<script>
    var resizefunc = [];
</script>




<script src="assets/plugins/switchery/switchery.min.js"></script>
<script src="assets/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
<script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>

<!-- Custom main Js -->
<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script src="assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#basicwizard').bootstrapWizard({'tabClass': 'nav nav-tabs navtab-custom nav-justified bg-muted'});

        $('#progressbarwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
            var $total = navigation.find('li').length;
            var $current = index+1;
            var $percent = ($current/$total) * 100;
            $('#progressbarwizard').find('.bar').css({width:$percent+'%'});
        },
            'tabClass': 'nav nav-tabs navtab-custom nav-justified bg-muted'});

        $('#btnwizard').bootstrapWizard({'tabClass': 'nav nav-tabs navtab-custom nav-justified bg-muted','nextSelector': '.button-next', 'previousSelector': '.button-previous', 'firstSelector': '.button-first', 'lastSelector': '.button-last'});

        var $validator = $("#commentForm").validate({
            rules: {
                emailfield: {
                    required: true,
                    email: true,
                    minlength: 3
                },
                firstnamefield: {
                    required: true,
                    minlength: 3
                },
                lastnamefield: {
                    required: true,
                    minlength: 3
                },
                phonenofield: {
                    required: true,
                    number:true,
                    minlength: 11
                },
                vercodefield: {
                    required: true,
                    number:true,
                    minlength: 6
                },
                passwdfield: {
                    required: true,
                    minlength: 6
                },
                dobfield: {
                    required: true,
                    date:true,
                    minlength: 6
                },
                genderfield: {
                    required: true,
                    radio:true,
                    minlength: 6
                },
                Nxtfirstnamefield: {
                    required: true,
                    minlength: 3
                },
                Nxtlastnamefield: {
                    required: true,
                    minlength: 3
                },
                Nxtphonenofield: {
                    required: true,
                    number:true,
                    minlength: 11
                },
                Nxtaddfield: {
                    required: true,
                    minlength: 3
                },
                bnkaccnamefield: {
                    required: true,
                    minlength: 3
                },
                bnkaccnofield: {
                    required: true,
                    number:true,
                    minlength: 3
                }
            }
        });

        $('#rootwizard').bootstrapWizard({
            'tabClass': 'nav nav-tabs navtab-custom nav-justified bg-muted',
            'onNext': function (tab, navigation, index) {
                var $valid = $("#commentForm").valid();
                if (!$valid) {
                    $validator.focusInvalid();
                    return false;
                }
            }
        });
    });

</script>
<Script>
    function isNumeric(n) {
        return !isNaN(parseFloat(n)) && isFinite(n);
    }

    $('#verify').on('click', function (e) {
        var phone = $('#phonenofield').val();
        if(phone == "" || isNumeric(phone) == false){
            $("#note").fadeIn();
            $("#note" ).html("<font color='red'>Empty field Not Allowed</font>");
            $("#note").fadeOut(3000);
            return false;
        } else {
            if (window.XMLHttpRequest) { xmlhttp=new XMLHttpRequest(); }

            else {  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");   }
            var url = '{{ URL::route("sms", ":id") }}';
            url = url.replace(':id', ''+phone+'');
            xmlhttp.open("GET", url,  false);
            xmlhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            xmlhttp.send();
            $("#note").fadeIn();
            $("#note" ).html("<font color='green'>"+xmlhttp.responseText+"</font>");
            $("#note").fadeOut(3000);
        }
        e.preventDefault();
    });

    $( "#refer" ).change(function() {
       refer();
    });

    $( "#rc" ).keyup(function() {
        refer();
    });

    function refer(){
        var rf = $( "#refer" ).val();
        if(rf == 1){
            call('autocomplete');
        }else{
            call('autocomplete');
        }
    }
    function call(wtg){
        $( "#rc" ).autocomplete({
            source: wtg,
            minLength: 3,
            select: function(event, ui) {
                $('#q').val(ui.item.value);
            }
        });
    }
</Script>

<!-- <script type="text/javascript">
    // Date Picker
    jQuery('#datepicker').datepicker();
    jQuery('#dobfield').datepicker({
        autoclose: true,
        todayHighlight: true
    });
</script> -->

</body>
</html>