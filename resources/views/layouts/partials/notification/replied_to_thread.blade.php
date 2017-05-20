<a href="{{route('thread.show',$notification->data['thread']['id'])}}">

    {{$notification->data['user']['name']}} commented on <strong> {{$notification->data['thread']['subject']}}</strong>
</a>
