@extends('layouts.front')

@section('content')
        <h4>{{$thread->subject}}</h4>
        <hr>
<div>
    {!! \Michelf\Markdown::defaultTransform($thread->thread) !!}
</div>
        <hr>


    <div class="actions">
        <a href="{{route('thread.edit',$thread->id)}}" class="btn btn-info btn-xs">Edit</a>
        <form action="{{route('thread.destroy',$thread->id)}}"  method="POST" class="inline-it">
           {{csrf_field()}}
           {{method_field('DELETE')}}
           <input class="btn btn-xs btn-danger" type="submit" value="Delete">
         </form>
{{--        <a href="{{route('thread.destroy',$thread->id)}}" class="btn btn-danger btn-xs">Delete</a>--}}
    </div>
@endsection