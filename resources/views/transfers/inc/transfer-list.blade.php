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
        @foreach ($transferList as $player)
            <div class="item">
                <div class="position">{{ $player->position }}</div>
                <div class="name">
                    <p>{{ $player->name }}</p>
                </div>
                <div class="team">
                    <p>{{ $player->real_team }}</p>
                </div>
                <div class="ovr">{{ $player->overall }}</div>
                <div class="price">{{ rand(10000000, 100000000) }} $</div>
                <div class="action dropdown">
                    <button class="dropdown-toggle" type="button" id="dropdown{{ $player->id }}"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdown{{ $player->id }}">
                        <a class="dropdown-item" href="#">Action 1</a>
                        <a class="dropdown-item" href="#">Action 2</a>
                        <a class="dropdown-item" href="#">Action 3</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>



{{ $transferList->links() }}
