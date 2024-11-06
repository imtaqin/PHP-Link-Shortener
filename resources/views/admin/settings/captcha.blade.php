@section('site_title', formatTitle([__('Captcha'), __('Settings'), config('settings.title')]))

@include('shared.breadcrumbs', ['breadcrumbs' => [
    ['url' => route('admin.dashboard'), 'title' => __('Admin')],
    ['title' => __('Settings')],
]])

<h1 class="h2 mb-3 d-inline-block">{{ __('Captcha') }}</h1>

<div class="card border-0 shadow-sm">
    <div class="card-header"><div class="font-weight-medium py-1">{{ __('Captcha') }}</div></div>
    <div class="card-body">

        @include('shared.message')

        <form action="{{ route('admin.settings', 'captcha') }}" method="post" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label for="i-captcha-driver">{{ __('Driver') }}</label>
                <select name="captcha_driver" id="i-captcha-driver" class="custom-select{{ $errors->has('captcha_driver') ? ' is-invalid' : '' }}">
                    @foreach(['' => __('None'), 'recaptcha' => 'reCAPTCHA', 'hcaptcha' => 'hCaptcha', 'turnstile' => 'Turnstile'] as $key => $value)
                        <option value="{{ $key }}" @if ((old('captcha_driver') !== null && old('captcha_driver') == $key) || (config('settings.captcha_driver') == $key && old('captcha_driver') == null)) selected @endif>{{ $value }}</option>
                    @endforeach
                </select>
                @if ($errors->has('captcha_driver'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('captcha_driver') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="i-captcha-site-key">{{ __('Site key') }}</label>
                <input id="i-captcha-site-key" type="text" class="form-control{{ $errors->has('captcha_site_key') ? ' is-invalid' : '' }}" name="captcha_site_key" value="{{ old('captcha_site_key') ?? config('settings.captcha_site_key') }}">
                @if ($errors->has('captcha_site_key'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('captcha_site_key') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="i-captcha-secret-key">{{ __('Secret key') }}</label>
                <input id="i-captcha-secret-key" type="password" class="form-control{{ $errors->has('captcha_secret_key') ? ' is-invalid' : '' }}" name="captcha_secret_key" value="{{ old('captcha_secret_key') ?? config('settings.captcha_secret_key') }}">
                @if ($errors->has('captcha_secret_key'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('captcha_secret_key') }}</strong>
                    </span>
                @endif
            </div>

            <button type="submit" name="submit" class="btn btn-primary">{{ __('Save') }}</button>
        </form>
    </div>
</div>