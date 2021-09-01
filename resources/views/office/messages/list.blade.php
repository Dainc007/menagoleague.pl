<section class="messages-list">
    <div class="players-list">
        <div class="message active" message-id="1">
            <div class="message-logo">
                <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}">
            </div>
            <div class="message-details">
                <div class="title">
                    <span>David Beckham</span>
                </div>
                <div class="info">
                    <span>
                        {{Str::limit('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore repellat ', 35, '...')}}
                    </span>
                </div>
            </div>
            <div class="message-date">
                <span>16.08</span>
            </div>
        </div>
        @for ($i=2;$i<=10;$i++)
            <div class="message" message-id="{{$i}}">
                <div class="message-logo">
                    <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}">
                </div>
                <div class="message-details">
                    <div class="title">
                        <span>David Beckham</span>
                    </div>
                    <div class="info">
                        <span>
                            {{Str::limit('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore repellat ', 35, '...')}}
                        </span>
                    </div>
                </div>
                <div class="message-date">
                    <p>16.08</p>
                </div>
            </div>
        @endfor
        <div class="messages-controls">
            <a href="#" class="disabled">
                <span class="material-icons">
                    skip_previous
                </span>
                Poprzednia strona 
                
            </a>
            <a href="#">
                Następna strona
                <span class="material-icons">
                    skip_next
                </span>
            </a>
        </div>
    </div>
    <div class="inbox-list hidden">
        <div class="inbox-tabs">
            <div class="inbox-received">
                <a class="activeTab" message-type="received" href="#">Inbox</a>
            </div>
            <div class="inbox-sent">    
                <a message-type="sent" href="#">Sent</a>
            </div>
            <div class="inbox-create">
                <a href="#">Send message</a>
            </div>
        </div>
        <div class="message active" message-type="received">
            <div class="message-logo">
                <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}">
            </div>
            <div class="message-details">
                <div class="title">
                    <span>David Beckham</span>
                </div>
                <div class="info">
                    <span>
                        {{Str::limit('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore repellat ', 35, '...')}}
                    </span>
                </div>
            </div>
            <div class="message-date">
                <span>16.08</span>
            </div>
        </div>
        @for ($i=0;$i<=10;$i++)
            <div class="message" message-type="{{ 
                $random = rand(0, 1) ? 'sent' : 'received'
            }}">
                <div class="message-logo">
                    <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}">
                </div>
                <div class="message-details">
                    <div class="title">
                        <span>David Beckham</span>
                    </div>
                    <div class="info">
                        <span>
                            {{Str::limit('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore repellat ', 35, '...')}}
                        </span>
                    </div>
                </div>
                <div class="message-date">
                    <p>16.08</p>
                </div>
            </div>
        @endfor
    </div>
    <div class="notifications-list hidden">
        <div class="message active" message-id="1">
            <div class="message-details">
                <div class="title">
                    <span>Transfer info</span>
                </div>
                <div class="info">
                    <span>
                        {{Str::limit('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore repellat ', 35, '...')}}
                    </span>
                </div>
            </div>
            <div class="message-date">
                <span>16.08</span>
            </div>
        </div>
        @for($i=0;$i<5;$i++)
        <div class="message" message-id="{{$i}}">
            <div class="message-details">
                <div class="title">
                    <span>Transfer info {{$i}}</span>
                </div>
                <div class="info">
                    <span>
                        {{Str::limit('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore repellat ', 35, '...')}}
                    </span>
                </div>
            </div>
            <div class="message-date">
                <span>16.08</span>
            </div>
        </div>
        @endfor
    </div>
</section>