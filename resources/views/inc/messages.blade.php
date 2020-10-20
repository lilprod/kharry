@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span>x</span>
            </button>
            <span>
                <b> {{$error}}</b> </span>
        </div>
    @endforeach
@endif


@if(session('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span>x</span>
        </button>
        <span>
           {{session('success')}}</span>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span>x</span>
        </button>
        <span>
           {{session('error')}}</span>
    </div>
@endif


@if(session('package_error'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span>x</span>
        </button>
        <span>
             @lang('search.package_error') </span>
    </div>
@endif

@if(session('success_package'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span>x</span>
        </button>
        <span>
             @lang('search.success_package')</span>
    </div>
@endif

@if(session('error_owner'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span>x</span>
        </button>
        <span>
             @lang('search.error_owner') </span>
    </div>
@endif

@if(session('error_code'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span>x</span>
        </button>
        <span>
             @lang('search.error_code') </span>
    </div>
@endif

@if(session('verif_error'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span>x</span>
        </button>
        <span>
             @lang('code_verif.verif_error') </span>
    </div>
@endif

@if(session('verif_success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span>x</span>
        </button>
        <span>
             @lang('code_verif.verif_success')</span>
    </div>
@endif

@if(session('success_notif'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span>x</span>
        </button>
        <span>
             @lang('myaccount.success_notif')</span>
    </div>
@endif

@if(session('password_success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span>x</span>
        </button>
        <span>
             @lang('myaccount.password_success')</span>
    </div>
@endif

@if(session('addtrip_success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span>x</span>
        </button>
        <span>
             @lang('mytrips.addtrip_success')</span>
    </div>
@endif

@if(session('edittrip_success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span>x</span>
        </button>
        <span>
             @lang('mytrips.edittrip_success')</span>
    </div>
@endif

@if(session('deletetrip_success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span>x</span>
        </button>
        <span>
             @lang('mytrips.deletetrip_success')</span>
    </div>
@endif


