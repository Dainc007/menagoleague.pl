@extends('layouts.basic')

@section('content')

<form method="POST" action="{{ route('team.application', ['id' => $id]) }}">

<div class="form-group">
    <label for="application">Dlaczego to właśnie Ty powinieneś prowadzić ten klub? (opcjonalnie)</label>
    <textarea class="form-control" id="application" name="application" rows="3"></textarea>
  </div>
    
    <input type="submit" class="btn btn-success btn-sm" name="apply" value="Aplikuj">
    @csrf
    @method('POST')
</form>

@endsection