<section class="messages-list">
    <div class="players-list">
        <div class="message active">
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
            <div class="message">
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
</section>