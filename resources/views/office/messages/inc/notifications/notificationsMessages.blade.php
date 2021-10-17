@foreach($user->notifications as $message)
<div class="text-full " message-id="{{ $message->id }}">
        <p>{{$message->title}}</p>

        <p>{{$message->content}}</p>
    </div>
@endforeach
