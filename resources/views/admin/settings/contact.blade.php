@section('site_title', formatTitle([__('Contact'), __('Settings'), config('settings.title')]))

@include('shared.breadcrumbs', ['breadcrumbs' => [
    ['url' => route('admin.dashboard'), 'title' => __('Admin')],
    ['title' => __('Settings')],
]])

<h1 class="h2 mb-3 d-inline-block">{{ __('Contact') }}</h1>

<div class="card border-0 shadow-sm">
    <div class="card-header"><div class="font-weight-medium py-1">{{ __('Contact') }}</div></div>
    <div class="card-body">

        @include('shared.message')

        <form action="{{ route('admin.settings', 'contact') }}" method="post" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label for="i-contact-form">{{ __('Contact form') }}</label>
                <select name="contact_form" id="i-contact-form" class="custom-select{{ $errors->has('contact_form') ? ' is-invalid' : '' }}">
                    @foreach([0 => __('Disabled'), 1 => __('Enabled')] as $key => $value)
                        <option value="{{ $key }}" @if ((old('contact_form') !== null && old('contact_form') == $key) || (config('settings.contact_form') == $key && old('contact_form') == null)) selected @endif>{{ $value }}</option>
                    @endforeach
                </select>
                @if ($errors->has('contact_form'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('contact_form') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="i-contact-email">{{ __('Email address') }}</label>

                <div class="input-group">
                    <input id="i-contact-email" type="text" dir="ltr" class="form-control{{ $errors->has('contact_email') ? ' is-invalid' : '' }}" name="contact_email" value="{{ old('contact_email') ?? config('settings.contact_email') }}">
                    <select name="contact_email_public" id="i-contact-email-public" class="custom-select{{ $errors->has('contact_email_public') ? ' is-invalid' : '' }}">
                        @foreach([0 => __('Private'), 1 => __('Public')] as $key => $value)
                            <option value="{{ $key }}" @if ((old('contact_email_public') !== null && old('contact_email_public') == $key) || (config('settings.contact_email_public') == $key && old('contact_email_public') == null)) selected @endif>{{ $value }}</option>
                        @endforeach
                    </select>
                </div>
                @if ($errors->has('contact_email'))
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $errors->first('contact_email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="i-contact-phone">{{ __('Phone') }}</label>
                <input type="text" name="contact_phone" id="i-contact-phone" class="form-control{{ $errors->has('contact_phone') ? ' is-invalid' : '' }}" value="{{ old('contact_phone') ?? config('settings.contact_phone') }}">
                @if ($errors->has('contact_phone'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('contact_phone') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="i-contact-address">{{ __('Address') }}</label>
                <input type="text" name="contact_address" id="i-contact-address" class="form-control{{ $errors->has('contact_address') ? ' is-invalid' : '' }}" value="{{ old('contact_address') ?? config('settings.contact_address') }}">
                @if ($errors->has('contact_address'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('contact_address') }}</strong>
                    </span>
                @endif
            </div>

            <div class="row mx-n2 mb-3">
                <div class="col-auto font-weight-medium text-body px-2">
                    {{ __('Social') }}
                </div>
                <div class="col d-flex align-items-center px-2">
                    <hr class="my-0 w-100">
                </div>
            </div>

            <div class="form-group">
                <label for="i-social-facebook">{{ __('Facebook') }}</label>
                <input type="text" dir="ltr" name="social_facebook" id="i-social-facebook" class="form-control{{ $errors->has('social_facebook') ? ' is-invalid' : '' }}" value="{{ old('social_facebook') ?? config('settings.social_facebook') }}">
                @if ($errors->has('social_facebook'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('social_facebook') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="i-social-x">{{ __('X') }}</label>
                <input type="text" dir="ltr" name="social_x" id="i-social-x" class="form-control{{ $errors->has('social_x') ? ' is-invalid' : '' }}" value="{{ old('social_x') ?? config('settings.social_x') }}">
                @if ($errors->has('social_x'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('social_x') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="i-social-instagram">{{ __('Instagram') }}</label>
                <input type="text" dir="ltr" name="social_instagram" id="i-social-instagram" class="form-control{{ $errors->has('social_instagram') ? ' is-invalid' : '' }}" value="{{ old('social_instagram') ?? config('settings.social_instagram') }}">
                @if ($errors->has('social_instagram'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('social_instagram') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="i-social-youtube">{{ __('YouTube') }}</label>
                <input type="text" dir="ltr" name="social_youtube" id="i-social-youtube" class="form-control{{ $errors->has('social_youtube') ? ' is-invalid' : '' }}" value="{{ old('social_youtube') ?? config('settings.social_youtube') }}">
                @if ($errors->has('social_youtube'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('social_youtube') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="i-social-linkedin">{{ __('LinkedIn') }}</label>
                <input type="text" dir="ltr" name="social_linkedin" id="i-social-linkedin" class="form-control{{ $errors->has('social_linkedin') ? ' is-invalid' : '' }}" value="{{ old('social_linkedin') ?? config('settings.social_linkedin') }}">
                @if ($errors->has('social_linkedin'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('social_linkedin') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="i-social-github">{{ __('GitHub') }}</label>
                <input type="text" dir="ltr" name="social_github" id="i-social-github" class="form-control{{ $errors->has('social_github') ? ' is-invalid' : '' }}" value="{{ old('social_github') ?? config('settings.social_github') }}">
                @if ($errors->has('social_github'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('social_github') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="i-social-discord">{{ __('Discord') }}</label>
                <input type="text" dir="ltr" name="social_discord" id="i-social-discord" class="form-control{{ $errors->has('social_discord') ? ' is-invalid' : '' }}" value="{{ old('social_discord') ?? config('settings.social_discord') }}">
                @if ($errors->has('social_discord'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('social_discord') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="i-social-reddit">{{ __('Reddit') }}</label>
                <input type="text" dir="ltr" name="social_reddit" id="i-social-reddit" class="form-control{{ $errors->has('social_reddit') ? ' is-invalid' : '' }}" value="{{ old('social_reddit') ?? config('settings.social_reddit') }}">
                @if ($errors->has('social_reddit'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('social_reddit') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="i-social-tiktok">{{ __('TikTok') }}</label>
                <input type="text" dir="ltr" name="social_tiktok" id="i-social-tiktok" class="form-control{{ $errors->has('social_tiktok') ? ' is-invalid' : '' }}" value="{{ old('social_tiktok') ?? config('settings.social_tiktok') }}">
                @if ($errors->has('social_tiktok'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('social_tiktok') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="i-social-threads">{{ __('Threads') }}</label>
                <input type="text" dir="ltr" name="social_threads" id="i-social-threads" class="form-control{{ $errors->has('social_threads') ? ' is-invalid' : '' }}" value="{{ old('social_threads') ?? config('settings.social_threads') }}">
                @if ($errors->has('social_threads'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('social_threads') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="i-social-tumblr">{{ __('Tumblr') }}</label>
                <input type="text" dir="ltr" name="social_tumblr" id="i-social-tumblr" class="form-control{{ $errors->has('social_tumblr') ? ' is-invalid' : '' }}" value="{{ old('social_tumblr') ?? config('settings.social_tumblr') }}">
                @if ($errors->has('social_tumblr'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('social_tumblr') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="i-social-pinterest">{{ __('Pinterest') }}</label>
                <input type="text" dir="ltr" name="social_pinterest" id="i-social-pinterest" class="form-control{{ $errors->has('social_pinterest') ? ' is-invalid' : '' }}" value="{{ old('social_pinterest') ?? config('settings.social_pinterest') }}">
                @if ($errors->has('social_pinterest'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('social_pinterest') }}</strong>
                    </span>
                @endif
            </div>

            <button type="submit" name="submit" class="btn btn-primary">{{ __('Save') }}</button>
        </form>

    </div>
</div>
