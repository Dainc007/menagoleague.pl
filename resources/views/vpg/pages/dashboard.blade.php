@extends('layouts.basic')

@section('content')

    <h1 class="text-center">Liga Typera</h1>
    <h4 class="text-center">Ostatnia aktualizacja: 15 minut temu</h4>

    kolejka:
    <select>
        <option>Wszystkie</option>
        <option>1</option>
        <option>2</option>
    </select>

    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Pkt</th>
        </tr>
        </thead>
        <tbody>
        @foreach($typers as $key => $typer)
            <tr>
                <th scope="row">{{$key + 1}}</th>
                <td>{{$typer->name}}</td>
                <td>{{rand(1,100)}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
