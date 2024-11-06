@extends('layouts.redirect')

@section('site_title', __('Link protected'))

@section('head_content')
    <meta name="robots" content="noindex">
@endsection

@section('content')
    <div class="bg-base-1 d-flex align-items-center flex-fill">
        <div class="container py-6">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-lg-6">
                    <form action="{{ route('link.redirect', ['id' => $link->id]) }}/password" method="post">
                        @csrf

                        <h1 class="h2 mb-3 text-center">{{ __('Link protected') }}</h1>
                        <p class="mb-5 text-center text-muted">{{ __('This link is password protected.') }}</p>

                        <div class="form-row">
                            <div class="col-12 col-sm">
                                <input id="i-password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-12 col-sm-auto mt-3 mt-sm-0">
                                <button type="submit" class="btn btn-primary btn-block">{{ __('Validate') }}</button>
                            </div>
                        </div>
                    </form>

                    @if(url()->previous() != url()->current())
                        <div class="text-center mt-5">
                            <a href="{{ url()->previous() }}" class="btn btn-primary">{{ __('Go back') }}</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection