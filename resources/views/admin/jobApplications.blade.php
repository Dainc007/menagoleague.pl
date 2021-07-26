@extends('layouts.app')
@section('title', config('app.name', 'Menago League'))

@section('content')
@if($jobApplications)
@foreach($jobApplications as $job)

<form method="POST" action="{{ route('admin.jobApplication.respond', ['id' => $job->id]) }}">
    <div class="form-group">
        {{$job->user->name}}
        {{$job->team->name}}
        {{$job->message}}
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