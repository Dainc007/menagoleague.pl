<form action="{{ route('team.sign') }}" method="POST">
    <p class="text-center h6 mb-4" style="font-weight: 600;">
        Poniższe drużyny zgodziły się zatrudnić Cię na posadzie Managera. Zdecyduj gdzie chcesz grać.
    </p>

    <select name="job" class="custom-select mb-3">
        @foreach ($user->jobApplications->where('status', 'accepted') as $job)
            <option value="{{ $job->id }}">{{ $job->team->name }}</option>
        @endforeach
    </select>

    <input class="btn btn-sm btn-success bshadow w-100 mb-3" type="submit" value="Podpisz Kontrakt">

    <p class="alert alert-danger m-0">
        Uwaga! Podpisanie kontraktu z klubem spowoduje zerwanie rozmów z pozostałymi pracowdawcami.
    </p>
    @csrf
    @method('POST')
</form>
