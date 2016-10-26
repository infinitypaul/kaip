<!DOCTYPE html>
<html style="background-color: #222; background-image: url(assets/images/main-bg.jpg); background-size:cover; background-position:center center;">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon.png">

        <title>MLF | Payment and Validation</title>
        
        <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />

        <link href="assets/plugins/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/core.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css">
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">

        <script src="assets/js/modernizr.min.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        
    </head>
    <body style="background-color:transparent;">

        <div class="wrapper-page" style="width:60%;">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="page-title text-white"><strong>WELCOME BACK, {{ $user->name }} {{ $user->user_code }}</strong></h4>
                </div>
                <div class="col-md-6">
                    <div class="clearfix pull-right m-b-15">
                        <button type="button" class="btn btn-primary btn-custom w-md waves-effect waves-light"><strong>LOG OUT</strong></button>
                    </div>
                </div>
            </div>
            <div class="panel">
                <form id="commentForm" method="get" action="" class="form-horizontal">
                    <div id="rootwizard" class="pull-in">
                        <ul>
                            <li><a href="#first" data-toggle="tab" disabled>PAYMENT DETAILS</a></li>
                            <li><a href="#second"  data-toggle="tab">BANK DETAILS</a></li>
                        </ul>
                        <div class="tab-content m-b-0 bx-s-0">
                            <div class="tab-pane fade" id="first">
                                <div class="panel-body">
                                    <div class="form-group clearfix">
                                        <div class="col-lg-12">
                                            <h5 class="page-title" style="background-color:#154604; color:#fff; padding: 10px;"><strong>Your Family ID is <i>344wi87</i></strong></h5>
                                            <p class="lead text-center">Support directly into the below 7 accounts. <br> </p>
                                            <div class="table-responsive">
                                                <table class="table table-hover table-condensed table-responsive m-0">
                                                    <thead>
                                                        <tr>
                                                            <th>FAMILY ID</th>
                                                            <th>VIRTUAL RANK</th>
                                                            <th>BANK NAME</th>
                                                            <th>ACC NAME</th>
                                                            <th>ACC NUMBER</th>
                                                            <th>AMOUNT</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php  $line = 7 - $counted ?>
                                                    @for ($row = 0; $row < $line; $row++)

                                                    <tr>
                                                        @for ($col = 0; $col < $line; $col++)
                                                        <td >{{ $dummy[$row][$col] }}</td>
                                                        @endfor

                                                    </tr>

                                                    @endfor

                                                   @foreach($notification as $notify)
                                                       <?php $counto = $notify->getDescendants()->count(); ?>
                                                       @foreach($notify->user as $virtual)
                                                        <tr>
                                                            <th scope="row">{{$virtual->user_code}}</th>
                                                            <td>Support <?php
                                                                AllFunction::Level($counto, $virtual->gender) ?></td>
                                                            <td>{{$virtual->bank_account}}</td>
                                                            <td>{{$virtual->bank_name}}</td>
                                                            <td>{{$virtual->account_no}}</td>
                                                            <td>&#8358;3000</td>
                                                        </tr>
                                                       @endforeach
                                                   @endforeach

                                                        <tr>
                                                            <th scope="row">1234</th>
                                                            <td>Support Family Foundation</td>
                                                            <td>GT Bank</td>
                                                            <td>My Liberty Family</td>
                                                            <td>010302344</td>
                                                            <td>&#8358;4000</td>
                                                        </tr>
                                                        <tr class="bg-dark">
                                                            <th scope="row">TOTAL</th>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>&#8358;25,000</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <br/>

                                            <div class="row form-group text-center m-t-15">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-warning waves-effect waves-light m-b-5"> <i class="fa fa-file-pdf-o m-r-5"></i> <span><b>DOWNLOAD ACCOUNT<br/> DETAILS IN PDF</b></span> </button>
                                                </div>
                                            </div>
                                            <p class="lead text-center">Supports can be made via Quickteller</p><hr>
                                            <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            SUPPORT THROUGH Quickteller
                                                        </h4>
                                                    </div>
                                                    <div class="panel-body">
                                                        <p class="text 1"><b>Support through Quickteller</b></p>
                                                        <p>
                                                            <!--Snippet provided by Interswitch starts here--->
                                                            <em><small><a class="quickteller-checkout-anchor" id="99401" style="text-align:left;">payment button will appear here shortly...</a></small></em>
                                                            <script type="text/javascript">
                                                                var QTCheckout = QTCheckout || {};
                                                                var testMode = true;
                                                                var baseUrl = "";
                                                                var reqRef = '{{time()}}'
                                                                QTCheckout.paymentItems = QTCheckout.paymentItems || [];
                                                                QTCheckout.paymentItems.push({
                                                                    paymentCode: 99401,
                                                                    extraData: {
                                                                        amount: "25000",
                                                                        buttonSize: "large",
                                                                        customerId: "12345",
                                                                        mobileNumber: "08170574789",
                                                                        emailAddress: "infinitypaul@live.com",
                                                                        redirectUrl: "Default",
                                                                        requestReference: reqRef
                                                                    }
                                                                });
                                                                if (testMode == true) baseUrl = "https://pwq.sandbox.interswitchng.com/scripts/quickteller-checkout-min.js?v=";
                                                                else baseUrl = "https://paywith.quickteller.com/scripts/quickteller-checkout-min.js?v=";
                                                                if (!QTCheckout.qtScript) {
                                                                    var qtScript = document.createElement('script');
                                                                    qtScript.type = 'text/javascript';
                                                                    qtScript.async = true;
                                                                    qtScript.src = baseUrl + new Date().getDay();
                                                                    var s = document.getElementsByTagName('script')[0];
                                                                    s.parentNode.insertBefore(qtScript, s);
                                                                    QTCheckout.qtScript = qtScript;
                                                                }
                                                                else if (QTCheckout.buildPaymentItemsUI) {
                                                                    QTCheckout.buildPaymentItemsUI();
                                                                }

                                                            </script>
                                                            <!--Snippet provided by Interswitch ends here -->
                                                        </p>
                                                    </div>
                                                </div><br/>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <!-- <div>
                                                        <input type="checkbox" checked="checked" data-plugin="switchery" data-color="#ef5350">
                                                        <label style="padding-left:20px;">
                                                            I accept <a href="#">Terms and Conditions</a>
                                                        </label>
                                                    </div>-->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="form-group text-right m-t-20">
                                            <div class="col-xs-12">
                                                <button class="btn btn-primary btn-custom w-md waves-effect waves-light" type="submit">COMPLETE REGSTRATION
                                                </button>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="second">
                                <div class="text-center">
                                    <a href="index.html" class="logo logo-lg"><i class="md md-equalizer"></i> <span>MLF</span> </a>
                                </div>

                                 <form class="form-horizontal m-t-20" action="index.html">

                                </form>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <h5 class="page-title">Upload Proof of Payment</h5>
                                    </div>
                                </div>
                                    <!-- Page-Title -->
                                <div class="row">
                                    <div class="col-md-12 portlets">
                                        <!-- Your awesome content goes here -->
                                        <div class="m-b-30">
                                            {!! Form::open(['method'=>'POST', 'url'=> 'upload', 'class'=>'dropzone form-horizontal m-t-20', 'id'=>'my-awesome-dropzone']) !!}



                                            {!! Form::close() !!}
                                        </div>
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
            </div>

        </div>

        
        <script>
            var resizefunc = [];
        </script>

        <!-- Main  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        
        
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script src="assets/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
        <script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>

        <!-- Dropzone js -->
        <script src="assets/plugins/dropzone/dist/dropzone.js"></script>

        <!-- Custom main Js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        
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
                        bnknamefield: {
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

            Dropzone.options.myAwesomeDropzone = {
                paramName: "file", // The name that will be used to transfer the file
                maxFilesize: 2, // MB
                accept: function(file, done) {
                    if (file.name == "justinbieber.jpg") {
                        done("Naha, you don't.");
                    }
                    else { done(); }
                }
            };
        </script>
    
    </body>
</html>











<div class="tab-pane fade" id="fourth">
    
</div>