<div class="transfer-forms">
    @if ($action == 'sign')
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="contract-tab" data-toggle="tab" href="#contract" role="tab"
                    aria-controls="contract" aria-selected="false">Kontrakt</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="contract" role="tabpanel" aria-labelledby="contract-tab">
                @include('transfers.forms.sign')
            </div>
        </div>
    @else
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="buy-tab" data-toggle="tab" href="#buy" role="tab" aria-controls="buy"
                    aria-selected="true">Kupno</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="loan-tab" data-toggle="tab" href="#loan" role="tab" aria-controls="loan"
                    aria-selected="false">Wypożyczenie</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="buy" role="tabpanel" aria-labelledby="buy-tab">
                @include('transfers.forms.buy')
            </div>
            <div class="tab-pane fade" id="loan" role="tabpanel" aria-labelledby="loan-tab">
                @include('transfers.forms.loan')
            </div>
        </div>
    @endif
</div>
