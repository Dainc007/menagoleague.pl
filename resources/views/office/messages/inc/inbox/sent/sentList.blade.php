@for ($i = 1; $i <= 10; $i++)
    <div class="message {{ $i === 1 ? 'active' : '' }} hide" message-type="sent">
        <div class="message-logo">
            <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}">
        </div>

        <div class="message-details">
            <div class="title"><span>David Beckham</span></div>

            <div class="info">
                <span>{{ Str::limit('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore repellat ', 35, '...') }}</span>
            </div>
        </div>

        <div class="message-date"><span>16.08</span></div>
    </div>
@endfor
