@for ($i = 1; $i < 10; $i++)
    <div class="text-full {{ $i === 1 ? 'active' : '' }}" message-id="{{ $i }}">
        <p>Good Morning, Boss {{ $i }}</p>

        <p>Lionel Messi has arrived to your stadium.</p>

        <p>We are so happy for this success, I wish you and this footballer the best!</p>
    </div>
@endfor
