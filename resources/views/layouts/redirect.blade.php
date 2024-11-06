@extends('layouts.wrapper')

@section('body')
    <body class="d-flex flex-column">
        @yield('content')

        @include('shared.footer', ['footer' => ['menu' => ['removed' => true], 'copyright' => (parse_url(config('app.url'))['host'] !== request()->getHost() ? ['removed' => true] : [])]])
    </body>
@endsection