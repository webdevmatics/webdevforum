<h4>{{$comment->body}} </h4>
@if(!empty($thread->solution))
    @if($thread->solution == $comment->id)
        <button class="btn btn-success pull-right">Solution</button>
    @endif

@else
    {{--//solution--}}
    <form action="{{route('markAsSolution')}}" method="post">
        {{csrf_field()}}
        <input type="hidden" name="threadId" value="{{$thread->id}}">
        <input type="hidden" name="solutionId" value="{{$comment->id}}">
        <input type="submit" class="btn btn-success pull-right" id="{{$comment->id}}" value="Mark As Solution">
    </form>


@endif
<lead>{{$comment->user->name}}</lead>

<div class="actions">

    {{--<a href="{{route('thread.edit',$thread->id)}}" class="btn btn-info btn-xs">Edit</a>--}}

    <a class="btn btn-primary btn-xs" data-toggle="modal" href="#{{$comment->id}}">edit</a>
    <div class="modal fade" id="{{$comment->id}}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
                    </button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                    <div class="comment-form">

                        <form action="{{route('comment.update',$comment->id)}}" method="post" role="form">
                            {{csrf_field()}}
                            {{method_field('put')}}
                            <legend>Edit comment</legend>

                            <div class="form-group">
                                <input type="text" class="form-control" name="body" id=""
                                       placeholder="Input..." value="{{$comment->body}}">
                            </div>


                            <button type="submit" class="btn btn-primary">Comment</button>
                        </form>

                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    {{--//delete form--}}
    <form action="{{route('comment.destroy',$comment->id)}}" method="POST" class="inline-it">
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <input class="btn btn-xs btn-danger" type="submit" value="Delete">
    </form>

</div>

@section('js')
    <script>
        function markAsSolution(threadId, solutionId) {
            $.post('{{route('markAsSolution')}}', {solutionId: solutionId, threadId: threadId}, function (data) {
                console.log('success');
            });
        }

    </script>

@endsection