<!-- @php
$date = date( 'y-m-d');
@endphp
<section class="central-advance">
    <div class="advance-headers">
        <h2>{{__('central.calendar.title')}}</h2>
        <span>MAR 2021</span>
    </div>

    <div class="advance-callendar">

        @for ($i = 0; $i < 5; $i++) <div class="advance-callendar-day">
            @php $nextDay=date( 'd' , strtotime( $date .'+'.$i.' day' )); @endphp
            <p>THR
                <span>20:45</span>
            </p>
            <div>
                <p>{{ $nextDay }}</p>
                <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}">
            </div>

            <span class="material-icons">swap_horiz</span>
    </div>
    @endfor

    </div>
</section> -->

<section class="central-advance">
    <div class="advance-headers">
        <h2>{{__('central.calendar.title')}}</h2>
        <span>{{__('central.calendar.month.'.$calendar[0]->format('M'))}}{{$calendar[0]->format('Y')}}</span>
    </div>


    <div class="advance-callendar">
        @foreach($calendar as $day)
        @if($fixtures !== '')
        <div class="advance-callendar-day">
            <p>{{__('central.calendar.day.'.$day->format('D'))}}
                @foreach($fixtures as $game)
                @if($game->date == $day->format('Y-m-d'))
                <span>{{$day->format('h:s')}}</span>
                @endif
                @endforeach
            </p>
            <div>
                <p>{{$day->format('d')}}</p>
                @foreach($fixtures as $game)
                @if($game->date == $day->format('Y-m-d'))
                <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}">
                @endif
                @endforeach
            </div>
            <span class="material-icons">swap_horiz</span>
        </div>
        @else
        <div class="advance-callendar-day">
            <p>{{__('central.calendar.day.'.$day->format('D'))}}
            </p>
            <div>
                <p>{{$day->format('d')}}</p>
            </div>
            <span class="material-icons">swap_horiz</span>
        </div>
        @endif
        @endforeach
    </div>


</section>