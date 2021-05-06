@extends('layouts.app')

@section('content')
<form action="{{ route('competition.store') }}" method="POST">
    <div class="form-group">

        <select class="custom-select" name="region">
            @foreach($regions as $region)
            <option>{{$region}}</option>
            @endforeach
        </select>

        <select class="custom-select" name="type">
            @foreach($leagueTypes as $type)
            <option>{{$type}}</option>
            @endforeach
        </select>

        <select class="custom-select" name="level">
            @foreach($levels as $level)
            <option>{{$level}}</option>
            @endforeach
        </select>

    </div>
    <button type="submit" class="btn btn-success">Dodaj Rozgrywki</button>
    @csrf
    @method('POST')
</form>
@endsection