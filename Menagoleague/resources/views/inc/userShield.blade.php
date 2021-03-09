<div class="user-info-wrapper d-flex justify-content-between">
    <div class="user-info d-flex p-1">
        <div class="user-info__logo">
            <img class="img-fluid" src="{{ asset('storage/shields/5.png') }}" alt="herb">
        </div>
        <div class="user-info__team-and-name d-flex flex-column px-3">
            <span class="user-name">
                {{$personal_data->name}}
            </span>
            <span class="team-name">
                @if($personal_data->team)
                {{$personal_data->team->name}}
                @else
                Bez Klubu
                @endif
            </span>
        </div>
        <div class="user-morale d-flex align-items-center bg-secondary" title="ogólno rozumiany poziom zadowolenia panujący w klubie">
            <span>100</span>
        </div>
    </div>
</div>