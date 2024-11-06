@section('site_title', formatTitle([__('Authentication'), __('Settings'), config('settings.title')]))

@include('shared.breadcrumbs', ['breadcrumbs' => [
    ['url' => route('admin.dashboard'), 'title' => __('Admin')],
    ['title' => __('Settings')],
]])

<h1 class="h2 mb-3 d-inline-block">{{ __('Authentication') }}</h1>

<div class="card border-0 shadow-sm">
    <div class="card-header"><div class="font-weight-medium py-1">{{ __('Authentication') }}</div></div>
    <div class="card-body">
        <ul class="nav nav-pills d-flex flex-fill flex-column flex-md-row mb-3" id="pills-tab" role="tablist">
            <li class="nav-item flex-grow-1 text-center">
                <a class="nav-link active" id="pills-registration-tab" data-toggle="pill" href="#pills-registration" role="tab" aria-controls="pills-registration" aria-selected="true">{{ __('Registration') }}</a>
            </li>

            <li class="nav-item flex-grow-1 text-center">
                <a class="nav-link" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="false">{{ __('Login') }}</a>
            </li>

            <li class="nav-item flex-grow-1 text-center">
                <a class="nav-link" id="pills-google-tab" data-toggle="pill" href="#pills-google" role="tab" aria-controls="pills-google" aria-selected="false">{{ __('Google') }}</a>
            </li>

            <li class="nav-item flex-grow-1 text-center">
                <a class="nav-link" id="pills-microsoft-tab" data-toggle="pill" href="#pills-microsoft" role="tab" aria-controls="pills-microsoft" aria-selected="false">{{ __('Microsoft') }}</a>
            </li>

            <li class="nav-item flex-grow-1 text-center">
                <a class="nav-link" id="pills-apple-tab" data-toggle="pill" href="#pills-apple" role="tab" aria-controls="pills-apple" aria-selected="false">{{ __('Apple') }}</a>
            </li>
        </ul>

        @include('shared.message')

        <form action="{{ route('admin.settings', 'authentication') }}" method="post" enctype="multipart/form-data">

            @csrf

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-registration" role="tabpanel" aria-labelledby="pills-registration-tab">
                    <div class="form-group">
                        <label for="i-registration">{{ __('Registration') }}</label>
                        <select name="registration" id="i-registration" class="custom-select{{ $errors->has('registration') ? ' is-invalid' : '' }}">
                            @foreach([0 => __('Disabled'), 1 => __('Enabled')] as $key => $value)
                                <option value="{{ $key }}" @if ((old('registration') !== null && old('registration') == $key) || (config('settings.registration') == $key && old('registration') == null)) selected @endif>{{ $value }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('registration'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('registration') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="i-registration-verification">{{ __('Email verification') }}</label>
                        <select name="registration_verification" id="i-registration-verification" class="custom-select{{ $errors->has('registration_verification') ? ' is-invalid' : '' }}">
                            @foreach([0 => __('Disabled'), 1 => __('Enabled')] as $key => $value)
                                <option value="{{ $key }}" @if ((old('registration_verification') !== null && old('registration_verification') == $key) || (config('settings.registration_verification') == $key && old('registration_verification') == null)) selected @endif>{{ $value }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('registration_verification'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('registration_verification') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="i-registration-tfa" class="d-inline-flex align-items-center"><span class="{{ (__('lang_dir') == 'rtl' ? 'ml-2' : 'mr-2') }}">{{ __('Two-factor authentication') }}</span><span class="badge badge-secondary">{{ __('Default') }}</span></label>
                        <select name="registration_tfa" id="i-registration-tfa" class="custom-select{{ $errors->has('registration_tfa') ? ' is-invalid' : '' }}">
                            @foreach([0 => __('Disabled'), 1 => __('Enabled')] as $key => $value)
                                <option value="{{ $key }}" @if ((old('registration_tfa') !== null && old('registration_tfa') == $key) || (config('settings.registration_tfa') == $key && old('registration_tfa') == null)) selected @endif>{{ $value }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('registration_tfa'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('registration_tfa') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
                    <div class="form-group">
                        <label for="i-login-tfa">{{ __('Two-factor authentication') }}</label>
                        <select name="login_tfa" id="i-login-tfa" class="custom-select{{ $errors->has('login_tfa') ? ' is-invalid' : '' }}">
                            @foreach([0 => __('Disabled'), 1 => __('Enabled')] as $key => $value)
                                <option value="{{ $key }}" @if ((old('login_tfa') !== null && old('login_tfa') == $key) || (config('settings.login_tfa') == $key && old('login_tfa') == null)) selected @endif>{{ $value }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('login_tfa'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('login_tfa') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-google" role="tabpanel" aria-labelledby="pills-google-tab">
                    <div class="form-group">
                        <label for="i-auth-google">{{ __('Enabled') }}</label>
                        <select name="auth_google" id="i-auth-google" class="custom-select{{ $errors->has('google') ? ' is-invalid' : '' }}">
                            @foreach([0 => __('No'), 1 => __('Yes')] as $key => $value)
                                <option value="{{ $key }}" @if ((old('auth_google') !== null && old('auth_google') == $key) || (config('settings.auth_google') == $key && old('auth_google') == null)) selected @endif>{{ $value }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('auth_google'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('auth_google') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="i-auth-google-client-id">{{ __('Client ID') }}</label>
                        <input type="text" name="auth_google_client_id" id="i-auth-google-client-id" class="form-control{{ $errors->has('auth_google_client_id') ? ' is-invalid' : '' }}" value="{{ old('auth_google_client_id') ?? config('settings.auth_google_client_id') }}">
                        @if ($errors->has('auth_google_client_id'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('auth_google_client_id') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="i-auth-google-client-secret">{{ __('Client secret') }}</label>
                        <input type="password" name="auth_google_client_secret" id="i-auth-google-client-secret" class="form-control{{ $errors->has('auth_google_client_secret') ? ' is-invalid' : '' }}" value="{{ old('auth_google_client_secret') ?? config('settings.auth_google_client_secret') }}">
                        @if ($errors->has('auth_google_client_secret'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('auth_google_client_secret') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="i-google-callback-url">{{ __('Callback URL') }}</label>
                        <div class="input-group">
                            <input type="text" dir="ltr" name="google_callback_url" id="i-google-callback-url" class="form-control" value="{{ route('login.google') }}" readonly>
                            <div class="input-group-append">
                                <div class="btn btn-primary" data-tooltip-copy="true" title="{{ __('Copy') }}" data-text-copy="{{ __('Copy') }}" data-text-copied="{{ __('Copied') }}" data-clipboard="true" data-clipboard-target="#i-google-callback-url">{{ __('Copy') }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-microsoft" role="tabpanel" aria-labelledby="pills-microsoft-tab">
                    <div class="form-group">
                        <label for="i-auth-microsoft">{{ __('Enabled') }}</label>
                        <select name="auth_microsoft" id="i-auth-microsoft" class="custom-select{{ $errors->has('microsoft') ? ' is-invalid' : '' }}">
                            @foreach([0 => __('No'), 1 => __('Yes')] as $key => $value)
                                <option value="{{ $key }}" @if ((old('auth_microsoft') !== null && old('auth_microsoft') == $key) || (config('settings.auth_microsoft') == $key && old('auth_microsoft') == null)) selected @endif>{{ $value }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('auth_microsoft'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('auth_microsoft') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="i-auth-microsoft-client-id">{{ __('Application (client) ID') }}</label>
                        <input type="text" name="auth_microsoft_client_id" id="i-auth-microsoft-client-id" class="form-control{{ $errors->has('auth_microsoft_client_id') ? ' is-invalid' : '' }}" value="{{ old('auth_microsoft_client_id') ?? config('settings.auth_microsoft_client_id') }}">
                        @if ($errors->has('auth_microsoft_client_id'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('auth_microsoft_client_id') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="i-auth-microsoft-client-secret">{{ __('Client secret value') }}</label>
                        <input type="password" name="auth_microsoft_client_secret" id="i-auth-microsoft-client-secret" class="form-control{{ $errors->has('auth_microsoft_client_secret') ? ' is-invalid' : '' }}" value="{{ old('auth_microsoft_client_secret') ?? config('settings.auth_microsoft_client_secret') }}">
                        @if ($errors->has('auth_microsoft_client_secret'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('auth_microsoft_client_secret') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="i-microsoft-callback-url">{{ __('Callback URL') }}</label>
                        <div class="input-group">
                            <input type="text" dir="ltr" name="microsoft_callback_url" id="i-microsoft-callback-url" class="form-control" value="{{ route('login.microsoft') }}" readonly>
                            <div class="input-group-append">
                                <div class="btn btn-primary" data-tooltip-copy="true" title="{{ __('Copy') }}" data-text-copy="{{ __('Copy') }}" data-text-copied="{{ __('Copied') }}" data-clipboard="true" data-clipboard-target="#i-microsoft-callback-url">{{ __('Copy') }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-apple" role="tabpanel" aria-labelledby="pills-apple-tab">
                    <div class="form-group">
                        <label for="i-auth-apple">{{ __('Enabled') }}</label>
                        <select name="auth_apple" id="i-auth-apple" class="custom-select{{ $errors->has('apple') ? ' is-invalid' : '' }}">
                            @foreach([0 => __('No'), 1 => __('Yes')] as $key => $value)
                                <option value="{{ $key }}" @if ((old('auth_apple') !== null && old('auth_apple') == $key) || (config('settings.auth_apple') == $key && old('auth_apple') == null)) selected @endif>{{ $value }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('auth_apple'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('auth_apple') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="i-auth-apple-client-id">{{ __('Service ID identifier') }}</label>
                        <input type="text" name="auth_apple_client_id" id="i-auth-apple-client-id" class="form-control{{ $errors->has('auth_apple_client_id') ? ' is-invalid' : '' }}" value="{{ old('auth_apple_client_id') ?? config('settings.auth_apple_client_id') }}">
                        @if ($errors->has('auth_apple_client_id'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('auth_apple_client_id') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="i-auth-apple-team-id">{{ __('Team ID') }}</label>
                        <input type="text" name="auth_apple_team_id" id="i-auth-apple-team-id" class="form-control{{ $errors->has('auth_apple_team_id') ? ' is-invalid' : '' }}" value="{{ old('auth_apple_team_id') ?? config('settings.auth_apple_team_id') }}">
                        @if ($errors->has('auth_apple_team_id'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('auth_apple_team_id') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="i-auth-apple-key-id">{{ __('Key ID') }}</label>
                        <input type="text" name="auth_apple_key_id" id="i-auth-apple-key-id" class="form-control{{ $errors->has('auth_apple_key_id') ? ' is-invalid' : '' }}" value="{{ old('auth_apple_key_id') ?? config('settings.auth_apple_key_id') }}">
                        @if ($errors->has('auth_apple_key_id'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('auth_apple_key_id') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="i-auth-apple-private-key">{{ __('Private key') }}</label>
                        <textarea name="auth_apple_private_key" id="i-auth-apple-private-key" class="form-control{{ $errors->has('auth_apple_private_key') ? ' is-invalid' : '' }}">{{ old('auth_apple_private_key') ?? config('settings.auth_apple_private_key') }}</textarea>
                        @if ($errors->has('auth_apple_private_key'))
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $errors->first('auth_apple_private_key') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="i-apple-callback-url">{{ __('Return URL') }}</label>
                        <div class="input-group">
                            <input type="text" dir="ltr" name="apple_callback_url" id="i-apple-callback-url" class="form-control" value="{{ route('login.apple') }}" readonly>
                            <div class="input-group-append">
                                <div class="btn btn-primary" data-tooltip-copy="true" title="{{ __('Copy') }}" data-text-copy="{{ __('Copy') }}" data-text-copied="{{ __('Copied') }}" data-clipboard="true" data-clipboard-target="#i-apple-callback-url">{{ __('Copy') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">{{ __('Save') }}</button>
        </form>

    </div>
</div>
