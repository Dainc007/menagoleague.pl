<form action="{{route('team.sign')}}" method="POST">
    <select name="job" class="custom-select">
        @foreach($user->jobApplications->where('status', 'accepted') as $job)
            <option value="{{ $job->id }}">{{ $job->team->name }}</option>
        @endforeach
    </select>

    <input class="btn btn-sm btn-success bshadow" type="submit" value="Podpisz Kontrakt">
    @csrf
    @method('POST')
</form>