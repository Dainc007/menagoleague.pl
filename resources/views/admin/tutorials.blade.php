@extends('layouts.app')
@section('title', config('app.name', 'Menago League'))

@section('content')
@if($tutorials)
@foreach($tutorials as $tutorial)

<form method="POST" action="{{ route('admin.tutorial.respond', ['id' => $tutorial->id]) }}">
    <div class="form-group">
        <p><a href="{{$tutorial->full_time}}" target="_blank">Staty po meczu</a> </p>

        <p><a href="{{$tutorial->half_time}}" target="_blank">Połowa</a> </p>

        <p><a href="{{$tutorial->fair_play}}" target="_blank">Uczciwa Gra</a> </p>
        <input type="text" name="response" required>
        <input type="submit" class="btn btn-sm btn-success" name="accept" value="akceptuj">
        <input type="submit" class="btn btn-sm btn-danger" name="reject" value="odrzuć">
    </div>
    @csrf
    @method('POST')
</form>



@endforeach
@endif
@endsection