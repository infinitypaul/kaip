<div class="col-sm-3 hidden-xs">
    <div class="panel panel-color panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Your Info</h3>
        </div>
        <div class="panel-body">
            <dl class="m-b-0">
                <dt>
                    Full Name
                </dt>
                <dd>
                    {{auth()->user()->name}}
                </dd>
                <dt>
                    Level
                </dt>
                <dd>
                    Level 
                </dd>
                <dt>
                    Phone Number
                </dt>
                <dd>
                    {{auth()->user()->mobile}}
                </dd>
            </dl>
        </div>
        <div class="panel-footer text-right">
            <a href="{{url('dashboard/'.auth()->user()->id.'')}}/edit" style="color:#030D11;"><b>UPDATE PROFILE</b></a>
        </div>
    </div>

    <div class="panel panel-border panel-warning">
        <div class="panel-heading">
            <h3 class="panel-title">Bank Info</h3>
        </div>
        <div class="panel-body">
            <a href="#"><b>{{ucwords(auth()->user()->bank_name)}}</b></a><br/>
            <a href="#"><strong>{{auth()->user()->bank_account}}</strong></a><br/>
            <a href="#"><strong>{{auth()->user()->account_no}}</strong></a><br/>
            <hr>
            <a href="{{ url('ticket') }}">Change Bank Info</a>
        </div>
    </div>

    <div class="panel panel-border panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Wallet</h3>
        </div>
        <div class="panel-body">
            <div class="widget-simple-chart text-right card-box" style="border: none;">
                <div class="circliful-chart" data-dimension="90" data-text="0%" data-width="5" data-fontsize="14" data-percent="{{auth()->user()->wallet}}" data-fgcolor="#3BAFDA" data-bgcolor="#ebeff2"></div>
                <h3 class="text-success">&#8358;<span class="counter">{{ auth()->user()->wallet }}</span></h3>
                <p class="text-primary">Total amount in your wallet</p>
            </div>
        </div>
        <div class="panel-footer text-right" style="background-color:#3BAFDA;">
            <a href="#" style="color:#030D11;"><b>VIEW WALLET</b></a>
        </div>
    </div>

</div>