<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webdev forum</title>
    <link rel="stylesheet" href="https://bootswatch.com/paper/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>
@include('layouts.partials.navbar')

@yield('banner')

<div class="container">


    <div class="row">
        <div class="row content-heading">
            <div class="col-md-3"><h4>Category</h4></div>
            <div class="col-md-9 ">
                <div class="row">
                    <div class="col-md-4"><h4 class="main-content-heading">@yield('heading')</h4>
                    </div>
                    <div class="col-md-offset-6 col-md-2">
                        <a class="btn btn-primary"  href="{{route('thread.create')}}">Create Thread</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        {{--//category section--}}
        <div class="col-md-3">
            <ul class="list-group">
                <a href="{{route('thread.index')}}" class="list-group-item">
                    <span class="badge">14</span>
                    All Thread
                </a>
                <a href="#" class="list-group-item">
                    <span class="badge">2</span>
                    PHP
                </a>
                <a href="#" class="list-group-item">
                    <span class="badge">1</span>
                    Python
                </a>
            </ul>
        </div>


        <div class="col-md-9">
            <div class="content-wrap well">
                @yield('content')
            </div>
        </div>
    </div>



</div>


<script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
<!-- Latest compiled and minified JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>