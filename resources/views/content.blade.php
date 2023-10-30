@extends('layouts.app')

@section('content')

<div class="container">
    <div class="transparent-wrapper"></div>

    @include('common.navbar')

    <div class="row margin-top-50">
        <div class="col-lg-9">
            <h1>{{$page}}</h1>
            <div id="interests-list"></div>
        </div>

        <div class="col-lg-3">
            @include('articles')
        </div>
    </div>

    <hr>

    @include('footer')

</div>
@endsection