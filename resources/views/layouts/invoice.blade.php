@extends('layouts.wrapper')

@section('body')
    <body class="d-flex flex-column">
        @yield('content')

        @include('shared.footer', ['footer' => ['menu' => ['removed' => true]]])
    </body>
@endsection