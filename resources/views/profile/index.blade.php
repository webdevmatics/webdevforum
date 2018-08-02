@extends('layouts.front')

@section('category')
    <div class="col-md-3" >
    <div class="dp">
    <img src="https://dummyimage.com/300x200/000/fff" alt="">
    </div>
        <h3>
            {{auth()->user()->name}}
        </h3>

    </div>

@endsection

@section('content')
<div>

    <h2>Activity Feeds</h2>

    @foreach($feeds as $feed)

        @include("feeds.$feed->type")


    @endforeach

</div>

@endsection