@extends('layouts.app')

@section('content')
<div class="bg-base-1 flex-fill">
    <div class="container pt-3 mt-3 pb-6">
        <div class="row">
            <div class="col-12">
                @include('links.' . $view)
            </div>
        </div>
    </div>
</div>
@endsection

@include('shared.sidebars.user')