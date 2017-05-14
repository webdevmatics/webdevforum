<div class="list-group">
    @forelse($threads as $thread)

        {{--<a href="{{route('thread.show',$thread->id)}}" class="list-group-item">--}}
            {{--<h4 class="list-group-item-heading">{{$thread->subject}}</h4>--}}
            {{--<p class="list-group-item-text">{{str_limit($thread->thread,100) }}--}}
                {{--<br>--}}
                {{--Posted by <a href="{{route('user_profile',$thread->user->name)}}">{{$thread->user->name}}</a>--}}
            {{--</p>--}}
        {{--</a>--}}


        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"><a href="{{route('thread.show',$thread->id)}}"> {{$thread->subject}}</a></h3>
            </div>
            <div class="panel-body">
                <p>{{str_limit($thread->thread,100) }}
                    <br>
                    Posted by <a href="{{route('user_profile',$thread->user->name)}}">{{$thread->user->name}}</a> {{$thread->created_at->diffForHumans()}}
                </p>
            </div>
        </div>

    @empty
        <h5>No threads</h5>

    @endforelse
</div>