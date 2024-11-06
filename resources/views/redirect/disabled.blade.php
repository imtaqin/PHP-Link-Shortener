@extends('layouts.redirect')

@section('site_title', __('Link disabled'))

@section('head_content')
    <meta name="robots" content="noindex">
@endsection

@section('content')
<div class="bg-base-1 d-flex align-items-center flex-fill">
    <div class="container py-6">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-lg-6">
                <h1 class="h2 mb-3 text-center">{{ __('Link disabled') }}</h1>
                <p class="mb-0 text-center text-muted">{{ __('This link has been disabled.') }}</p>

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