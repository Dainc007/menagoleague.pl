@for ($i = 1; $i < 10; $i++)
    <div class="message {{ $i === 1 ? 'active' : '' }}" message-id="{{ $i }}">
        <div class="message-details">
            <div class="title"><span>Transfer info {{ $i }}</span></div>

            <div class="info">
                <span>{{ Str::limit('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore repellat ', 35, '...') }}</span>
            </div>
        </div>

        <div class="message-date"><span>16.08</span></div>
    </div>
@endfor
