@if (session()->has('success'))
<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="fa fa-times-circle"></i> Success</h4>
     {!!  session()->get('success')  !!}

    <a href="javascript:void(0)" class="alert-link"></a>
</div>
@endif