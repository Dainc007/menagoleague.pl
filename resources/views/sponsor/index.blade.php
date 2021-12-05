@extends('layouts.app')

@section('title', 'Sponsorzy')

@section('content')

    <div class="card-group">
        @foreach($offers as $offer)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Sponsor: {{$offer->company->name}}</h5>
                    <h6 class="card-title">budżet: {{number_format($offer->company->budget)}}</h6>
                    <p class="card-text">Tygodniówka: {{number_format($offer->wage)}}</p>
                    <p class="card-text">Za podpis: {{number_format($offer->sign_bonus)}}</p>
                    <p class="card-text">Osiągnięcie celu ligowego:{{number_format($offer->league_bonus)}}</p>
                    <p class="card-text">Osiągnięcie celów w pucharze krajowym:{{number_format($offer->domestic_cup_bonus)}}</p>
                    <p class="card-text">Osiągnięcie celów w puchare międzynarodowym:{{number_format($offer->international_cup_bonus)}}</p>
                    <br>
                    <h6 class="card-title">Oczekiwania</h6>
                    <p class="card-text">Liga: {{$offer->league_goal}}</p>
                    <p class="card-text">Puchar Krajowy: {{$offer->domestic_cup_goal}}</p>
                    <p class="card-text">Puchar Międzynarodowy: {{$offer->international_cup_goal}}</p>

                    <a href="#" class="btn btn-sm btn-success">Podpisz</a>
                </div>
            </div>
        @endforeach
    </div>

@endsection

