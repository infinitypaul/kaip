@if (session()->has('error'))
<div class="alert alert-danger alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="fa fa-times-circle"></i> Error</h4>
     {{ session()->get('error') }}

    <a href="javascript:void(0)" class="alert-link"></a>
</div>
@endif