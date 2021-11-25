<div class="squad-team-management">

    <div class="alert alert-info" role="alert">
        <b>Podpowiedź:</b> Jeśli nie wiesz jak przenieść swój skład do gry FIFA, zerknij <a href="https://menagoleague.pl/help/tutorial#squadBuilder" class="alert-link">TUTAJ</a>.
    </div>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="status-tab" data-toggle="tab" href="#status" role="tab"
                aria-controls="status" aria-selected="true">
                {{__('team.tabs.status')}}
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="attributes-tab" data-toggle="tab" href="#attributes" role="tab"
                aria-controls="attributes" aria-selected="false">
                {{__('team.tabs.attr')}}
            </a>
        </li>
    </ul>


    <div class="tab-content" id="myTabContent">        
        @include('team.inc.status')
        @include('team.inc.attributes')
    </div>

</div>
