@extends('layouts.app')

@section('content')
<div class="bg-base-1 flex-fill">
    <div class="container pt-3 mt-3 pb-6">
        @include('account.' . $view)
    </div>
</div>
@endsection

@include('shared.sidebars.user')