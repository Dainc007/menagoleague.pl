<div class="container py-3 scoreline d-flex flex-row overflow-auto" id="scoreline">

    @for($i = 1; $i<=20; $i++) <div class="game d-flex flex-column  align-items-center">

        <div class="team d-flex flex-row justify-content-between align-items-center">
            <span class="shield"><img src="{{ asset('shields/5.png') }}"></span><span class="host">Arsenal</span> <span class="goals">1</span>
        </div>

        <div class="team d-flex flex-row justify-content-between align-items-center">
            <span class="shield"><img src="{{ asset('shields/10.png') }}"></span><span class="host">Chelsea</span> <span class="goals">1</span>
        </div>

        <span class="data">Przedwczoraj</span>
</div>
@endfor

</div>