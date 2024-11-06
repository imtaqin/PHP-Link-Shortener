@section('site_title', formatTitle([__('Email'), __('Settings'), config('settings.title')]))

@include('shared.breadcrumbs', ['breadcrumbs' => [
    ['url' => route('admin.dashboard'), 'title' => __('Admin')],
    ['title' => __('Settings')],
]])

<h1 class="h2 mb-3 d-inline-block">{{ __('Email') }}</h1>

<div class="card border-0 shadow-sm">
    <div class="card-header"><div class="font-weight-medium py-1">{{ __('Email') }}</div></div>
    <div class="card-body">
        @include('shared.message')

        <form action="{{ route('admin.settings', 'email') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="i-email-driver">{{ __('Driver') }}</label>
                <select name="email_driver" id="i-email-driver" class="custom-select{{ $errors->has('email_driver') ? ' is-invalid' : '' }}">
                    @foreach(['smtp' => 'SMTP', 'sendmail' => 'Sendmail', 'log' => 'Log'] as $key => $value)
                        <option value="{{ $key }}" @if ((old('email_driver') !== null && old('email_driver') == $key) || (config('settings.email_driver') == $key && old('email_driver') == null)) selected @endif>{{ $value }}</option>
                    @endforeach
                </select>
                @if ($errors->has('email_driver'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email_driver') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="i-email-host">{{ __('Host') }}</label>
                <input type="text" name="email_host" id="i-email-host" class="form-control{{ $errors->has('email_host') ? ' is-invalid' : '' }}" value="{{ old('email_host') ?? config('settings.email_host') }}">
                @if ($errors->has('email_host'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email_host') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="i-email-port">{{ __('Port') }}</label>
                <input type="number" name="email_port" id="i-email-port" class="form-control{{ $errors->has('email_port') ? ' is-invalid' : '' }}" value="{{ old('email_port') ?? config('settings.email_port') }}">
                @if ($errors->has('email_port'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email_port') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="i-email-encryption">{{ __('Encryption') }}</label>
                <select name="email_encryption" id="i-email-encryption" class="custom-select{{ $errors->has('email_encryption') ? ' is-invalid' : '' }}">
                    @foreach(['tls' => 'TLS', 'ssl' => 'SSL'] as $key => $value)
                        <option value="{{ $key }}" @if ((old('email_encryption') !== null && old('email_encryption') == $key) || (config('settings.email_encryption') == $key && old('email_encryption') == null)) selected @endif>{{ strtoupper($value) }}</option>
                    @endforeach
                </select>
                @if ($errors->has('email_encryption'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email_encryption') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="i-email-address">{{ __('Email address') }}</label>
                <input type="text" dir="ltr" name="email_address" id="i-email-address" class="form-control{{ $errors->has('email_address') ? ' is-invalid' : '' }}" value="{{ old('email_address') ?? config('settings.email_address') }}">
                @if ($errors->has('email_address'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email_address') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="i-email-username">{{ __('Username') }}</label>
                <input type="text" name="email_username" id="i-email-username" class="form-control{{ $errors->has('email_username') ? ' is-invalid' : '' }}" value="{{ old('email_username') ?? config('settings.email_username') }}">
                @if ($errors->has('email_username'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email_username') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="i-email-password">{{ __('Password') }}</label>
                <input type="password" name="email_password" id="i-email-password" class="form-control{{ $errors->has('email_password') ? ' is-invalid' : '' }}" value="{{ old('email_password') ?? config('settings.email_password') }}">
                @if ($errors->has('email_password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email_password') }}</strong>
                    </span>
                @endif
            </div>

            <button type="submit" name="submit" class="btn btn-primary">{{ __('Save') }}</button>
        </form>
    </div>
</div>
