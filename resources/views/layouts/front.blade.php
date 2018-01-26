<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Webdev forum</title>
    <link rel="stylesheet" href="https://bootswatch.com/paper/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.4/css/selectize.min.css">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body >
<div id="app">
@include('layouts.partials.navbar')

@yield('banner')

<div class="container">


    @include('layouts.partials.error')

    @include('layouts.partials.success')

    <div class="row">
        <h2> Forum</h2>
        <br>
        
        @section('category')
        
            @include('layouts.partials.categories')
        @show

        <div class="col-md-9">
            <div class="content-wrap ">
                @yield('content')
            </div>
        </div>
    </div>

</div>
</div>

{{--<script src="https://code.jquery.com/jquery-3.1.1.min.js"--}}
        {{--integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="--}}
        {{--crossorigin="anonymous"></script>--}}
{{--<!-- Latest compiled and minified JS -->--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>

@yield('js')
</body>
</html>