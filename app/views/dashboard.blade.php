{{-----------------------------Do not delete this code------------------------}}
@if (Session::get('just_reg') == "yes")
<div class="row">
    <div class="col-sm-12">
        <div class="alert alert-success">
            <strong>@lang('registration.great')</strong>
            @lang('registration.success')
        </div>
    </div>
</div>
{{ Session::forget('just_reg') }}
@endif
{{----------------------------------------------------------------------------}}

<h1>Dashboard</h1>