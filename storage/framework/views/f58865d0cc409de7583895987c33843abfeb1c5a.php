<div class="transfer-forms">
    <?php if($action == 'sign'): ?>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="contract-tab" data-toggle="tab" href="#contract" role="tab"
                    aria-controls="contract" aria-selected="false">Kontrakt</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="contract" role="tabpanel" aria-labelledby="contract-tab">
                <?php echo $__env->make('transfers.forms.sign', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    <?php else: ?>
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
                <?php echo $__env->make('transfers.forms.buy', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="tab-pane fade" id="loan" role="tabpanel" aria-labelledby="loan-tab">
                <?php echo $__env->make('transfers.forms.loan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/transfers/forms/transfers-actions.blade.php ENDPATH**/ ?>