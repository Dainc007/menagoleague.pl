<div class="transfer-table">
    <div class="legend">
        <div class="position">POZ</div>
        <div class="name">Name</div>
        <div class="team">Team</div>
        <div class="ovr">OVR</div>
        <div class="price">Price</div>
        <div class="action">Act</div>
    </div>
    <div class="data">
        @foreach ($loanList as $player)
            <div class="item">
                <div class="position">{{ $player->position }}</div>
                <div class="name">
                    <img src="/images/placeholder-person.svg" alt="">
                    <p>{{ $player->name }}</p>
                </div>
                <div class="team">
                    <img src="/images/shields/6.png" alt="">
                    <p>{{ $player->real_team }}</p>
                </div>
                <div class="ovr">{{ $player->overall }}</div>
                <div class="price">{{ rand(10000000, 100000000) }} $</div>
                <div class="action dropdown">
                    <button class="dropdown-toggle" type="button" id="dropdown{{ $player->id }}"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    </button>
                    @include('transfers.forms.actions')
                </div>
            </div>
        @endforeach

        @foreach ($loanList as $player)
            <div class="ritem">
                <div class="position">{{ $player->position }}</div>
                <div class="name">
                    <img src="/images/placeholder-person.svg" alt="">
                    <p>{{ $player->name }}</p>
                </div>
                <div class="team">
                    <img src="/images/shields/6.png" alt="">
                    <p>{{ $player->real_team }}</p>
                </div>
                <div class="ovr">{{ $player->overall }}</div>
                <div class="price">{{ rand(10000000, 100000000) }} $</div>
                <div class="action">
                    <button class="dropdown-toggle" type="button" id="dropdown{{ $player->id }}"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    </button>
                    @include('transfers.forms.actions')
                </div>
            </div>
        @endforeach
    </div>

</div>



{{ $transferList->links() }}
