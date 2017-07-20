@extends('layouts.front')

@section('heading',"Create Thread")

@section('content')


    <div class="row">
        <div class=" well">
            <form class="form-vertical" action="{{route('thread.store')}}" method="post" role="form"
                  id="create-thread-form">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" name="subject" id="" placeholder="Input..."
                           value="{{old('subject')}}">
                </div>

                <div class="form-group">
                    <label for="tag">Tags</label>
                    <select class="form-control" name="tags[]" multiple id="tag">
                        {{-- todo add from db--}}
                        @foreach($tags as $tag)
                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="thread">Thread</label>
                    <textarea class="form-control" name="thread" id="" placeholder="Input..."
                    > {{old('thread')}}</textarea>
                </div>

<<<<<<< HEAD
            
=======
                {{--<div class="form-group">--}}
                    {{--{!! app('captcha')->display() !!}--}}
                {{--</div>--}}
>>>>>>> 58da9991e36a7313c9ed14d2a6949577e3f0ae4e

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection
<<<<<<< HEAD
=======

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.4/js/standalone/selectize.min.js"></script>

    <script>

        $(function () {
            $('#tag').selectize();
        })
    </script>
@endsection
>>>>>>> 58da9991e36a7313c9ed14d2a6949577e3f0ae4e
