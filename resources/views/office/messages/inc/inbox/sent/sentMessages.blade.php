@for ($i = 1; $i <= 10; $i++)
    <div class="text-full" sent-message-id="{{ $i }}">
        <p>Good Morning, Boss {{ $i }}</p>

        @for ($j = 1; $j < 5; $j++)
            <p>
                Sent
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit nulla dolor molestiae repellendus
                doloremque consequatur ullam facilis quod explicabo ex quaerat, id modi minus at impedit animi ipsam
                libero dolorum?
            </p>
        @endfor

        <div class="accept">
            <button>Przejdź do ...</button>
        </div>
    </div>
@endfor
