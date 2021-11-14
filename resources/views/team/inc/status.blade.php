<div class="status-content tab-pane fade active show" id="status" role="tabpanel" aria-labelledby="standings-tab">
    <div class="player-status-container">
        <div class="player-status-desc">
            <p class="pos">{{ __('team.table.position') }}</p>

            <p class="name">{{ __('team.table.name') }}</p>

            <p class="overall">{{ __('team.table.ovr') }}</p>

            <p class="role">{{ __('team.table.role') }}</p>

            <p class="action">{{ __('team.table.act') }}</p>
        </div>
        <div class="player-status-content">
            @if ($user->team->players !== null)
                @foreach ($user->team->players as $player)
                    <div class="player-status-item">
                        <p class="pos">{{ __('player.positions.' . $player->playerDetails->bestPosition) }}</p>

                        <a class="name" href="{{ route('players.show', ['player' => $player]) }}">
                            <img class="player-image"
                                 src="{{env('PLAYER_SRC') . $player->playerDetails->id}}.png" alt="">
                            {{ $player->name }}
                        </a>

                        <p class="overall">{{ $player->playerDetails->overall }}</p>

                        <p class="role">Nd.</p>

                        <div class="dropdown player-actions-container">
                            <button class="btn w-100 h-100 dropdown-toggle material-icons" type="button"
                                id="dropdown{{ $player->id }}" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdown{{ $player->id }}">
                                <a class="dropdown-item" href="#">{{ __('player.actions.talk') }}</a>
                                <a class="dropdown-item" href="#">{{ __('player.actions.stats') }}</a>
                                <a class="dropdown-item" href="#">{{ __('player.actions.extend') }}</a>
                                <a class="dropdown-item" href="#">{{ __('player.actions.sell') }}</a>
                                <a class="dropdown-item" href="#">{{ __('player.actions.terminate') }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>W Twojej druzynie nie ma obecnie zadnego piłkarza</p>
            @endif
        </div>
    </div>
</div>
