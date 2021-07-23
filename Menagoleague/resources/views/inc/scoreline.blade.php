<div class="container py-1 scoreline d-flex flex-row overflow-auto" id="scoreline">

    @for($i = 1; $i<=20; $i++) <div class="d-flex flex-column  align-items-center">

        <div class="d-flex flex-row justify-content-between align-items-center">
            <span><img class="img-fluid" src="{{ asset('storage/shields/5.png') }}"></span>
            <span>Arsenal</span> 
            <span>2</span>
        </div>

        <div class="d-flex flex-row justify-content-between align-items-center">
            <span><img class="img-fluid" src="{{ asset('storage/shields/20.png') }}"></span>
            <span>Chelsea</span> 
            <span>1</span>
        </div>

        <span class="data">Przedwczoraj</span>
</div>
@endfor

</div>