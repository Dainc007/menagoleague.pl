<section class="office-rivals">
    {{ session()->get('message') ?? '' }}

    <h2 class="office-title">
        Odwieczni rywale
    </h2>
    <div class="rivals-statistics">
        @for ($i=0;$i<5;$i++)
            <div class="rival-info">
                <p class="rival-name">Rywal
                </p>
                <div class="rival-form">
                    @for($z=0;$z<5;$z++)
                        @php 
                            $randomNumber = rand(-1,1);
                        @endphp
                            @if ($randomNumber == -1)
                                <div class='bg-danger text-white'>P</div>
                            @elseif ($randomNumber == 0)
                                <div class='bg-warning text-white'>R</div>
                            @else
                                <div class='bg-success text-white'>W</div>
                            @endif
                    @endfor
                </div>
            </div>
        @endfor
    </div>
    @foreach($user->rivals as $userRvial)
    {{$userRvial->name}}
    @endforeach

    
</section>