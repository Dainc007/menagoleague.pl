<div class="user-info-wrapper d-flex justify-content-between">
    <div class="user-info d-flex p-1">
        <div class="user-info__logo">
            <img class="img-fluid p-2" style="max-height:100px;" src="{{ asset('storage/shields/5.png') }}" alt="herb">
        </div>
        <div class="user-info__team-and-name d-flex flex-column px-3">
            <span class="user-name">     
                {{auth()->user()->name}}
            </span>
            <span class="team-name">
                @if(auth()->user()->team)
                {{auth()->user()->team->name}}
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