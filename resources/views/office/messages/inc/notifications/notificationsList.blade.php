@foreach($user->notifications as $message)
<div class="message" message-id="{{ $message->id }}">
        <div class="message-details">
            <div class="title"><span>{{$message->title}}</span></div>

            <div class="info">
                <span>{{ Str::limit($message->content, 35) }}</span>
            </div>
        </div>

        <div class="message-date"><span>{{$message->created_at}}</span></div>
    </div>
@endforeach