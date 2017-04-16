@extends('layouts.front')

@section('bannedr')
    <div class="jumbotron">
        <div class="container">
            <h1>Join Webdevmatics Community</h1>
            <p>Help and get help</p>
            <p>
                <a class="btn btn-primary btn-lg">Learn more</a>
            </p>
        </div>
    </div>
@endsection


@section('content')
    {{--<h3>Threads</h3>--}}
    @include('thread.partials.thread-list')
@endsection

