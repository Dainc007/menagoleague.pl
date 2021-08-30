<div class="season-cleanSheets">
    <h2>{{__('season.sheets')}}</h2>

    <div class="topsAndCards-info">
        <div class="legend">
            <img src="{{ url('/images/cleansheets-icon.svg') }}" alt="">
        </div>
    </div>

    <div class="topsAndCards-container">
        @for ($i = 1; $i <= 10; $i++)
            <div class="topAndCards-item">
                <p class="id">{{ $i }}</p>
                <div class="name">
                    <img src="/images/shields/{{ rand(1, 8) }}.png" alt="">
                    <p>Nazwa piłkarza</p>
                </div>
                <p class="score">{{ rand(1, 100) }}</p>
            </div>
        @endfor
    </div>
</div>
