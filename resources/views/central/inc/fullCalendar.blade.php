@extends('layouts.app')

@section('content')
<div class="container">
    <div class="full-calendar">
        <div class="calendar-display">
            <h2>{{ __('central.calendar.title') }}</h2>
            <h3>{{ __('central.calendar.month.' . today()->format('M')) }}</h3>
            <div class="calendar">
                <div class="month-container">
                    @foreach($week as $day)
                    <div class="month-item">{{ __('central.calendar.day.' . $day) }}</div>
                    @endforeach
                </div>

                <div class="day-container">

                    @foreach($calendar as $day)
                    <div class="day-item @if(today()->month !== $day->month)
                        day-item-disabled
                        @endif
                        @if($day == today())
                        current-day
                        @endif">
                        <p>{{$day->format('d')}}</p>
                        @if($fixtures !== null)
                        @foreach ($fixtures as $game)
                        @if ($game->date == $day->format('Y-m-d'))
                        <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}">
                        @endif
                        @endforeach
                        @endif
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="calendar-forms">
            <div>Form1</div>
            <div>Form2</div>
            <div>Form3</div>
        </div>
    </div>
</div>
@endsection