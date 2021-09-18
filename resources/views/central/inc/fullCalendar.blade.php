@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="full-calendar">
            <div class="calendar-display">
                <h2>{{ __('central.calendar.title') }}</h2>
                <h3>{{ __('central.calendar.month.' . today()->format('M')) }}</h3>
                <div class="calendar">
                    <div class="month-container">
                        @foreach ($week as $day)
                            <div class="month-item">{{ __('central.calendar.day.' . $day) }}</div>
                        @endforeach
                    </div>

                    <div class="day-container">

                        @foreach ($calendar as $day)
                            <div
                                class="day-item @if (today()->month !== $day->month)
                        day-item-disabled
                        @endif
                        @if ($day == today())
                        current-day
                        @endif">
                                <p>{{ $day->format('d') }}</p>
                                @if ($fixtures !== null)
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
                <form action="">
                    <h2>Przełóż mecz</h2>

                    <div class="form-group">
                        <label for="selectMatch">Wybierz mecz który chcesz przełożyć: </label>
                        <select class="custom-select" name="selectMatch" id="selectMatch">
                            <option selected disabled>Wybierz mecz:</option>
                            @for ($i = 1; $i <= 10; $i++)
                                <option>Lorem, ipsum dolor.</option>
                            @endfor
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="changeDate">Wybierz nową date meczu:</label>
                        <input type="date" name="changeDate" id="changeDate">
                    </div>

                    <div class="form-group">
                        <label for="changeTime">Wybierz nową date meczu:</label>
                        <input type="time" name="changeTime" id="changeTime">
                    </div>

                    <button type="submit" name="changeMatchDate" value="changeMatchDate"
                        class="btn btn-success bshadow">Zaproponuj przełożenie meczu</button>
                </form>
            </div>
        </div>
    </div>
@endsection
