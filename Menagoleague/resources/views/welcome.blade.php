@extends('layouts.basic')

@section('content')

@include('inc.mainNav')

@include('inc.scoreline')

@include('inc.slideshow')

@foreach($articles as $article)
<h6 class="text-center">{{$article->title}}</h6>
<p class="text-center">{{$article->content}}</p>
<small class="text-center">{{$article->device}}</small>
<p class="text-center">{{$article->created_at}}</p>
@endforeach

@endsection