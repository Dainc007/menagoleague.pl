<div class="squad-team-management">
    {{-- tab for team --}}
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="status-tab" data-toggle="tab" href="#status" role="tab"
                aria-controls="status" aria-selected="true">
                STATUS
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="attributes-tab" data-toggle="tab" href="#attributes" role="tab"
                aria-controls="attributes" aria-selected="false">
                ATTRIBUTES
            </a>
        </li>
    </ul>


    <div class="tab-content" id="myTabContent">
        {{-- status content --}}
        <div class="status-content tab-pane fade active show" id="status" role="tabpanel"
            aria-labelledby="standings-tab">
            <div class="player-status-container">
                <div class="player-status-desc">
                    <p class="pos">Pos</p>

                    <p class="name">Name</p>

                    <p class="overall">OVR</p>

                    <p class="role">Role</p>

                    <p class="action">Act</p>
                </div>
                <div class="player-status-content">
                    @if (!empty($user->team->players))
                        @foreach ($user->team->players as $player)
                            <div class="player-status-item">
                                <p class="pos">{{-- {{ $player->position }} --}}LM CM CAM</p>

                                <a class="name" href="{{ route('players.show', ['player' => $player]) }}">
                                    <img class="player-image" src="https://picsum.photos/50/50" alt="">
                                    {{ $player->name }}
                                </a>

                                <p class="overall">{{ $player->overall }}</p>

                                <p class="role">Rotating</p>

                                <div class="dropdown player-actions-container">
                                    <button class="btn w-100 h-100 dropdown-toggle material-icons" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Rozwiąz kontrakt</a>
                                        <a class="dropdown-item" href="#">Przedłuz umowę</a>
                                        <a class="dropdown-item" href="#">Rozmawiaj</a>
                                        <a class="dropdown-item" href="#">Wystaw na listę transferową</a>
                                        <a class="dropdown-item" href="#">Statystyki</a>
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

        {{-- attributes content --}}
        <div class="attributes-content tab-pane fade" id="attributes" role="tabpanel" aria-labelledby="standings-tab">
            <div class="player-attributes-container">
                <div class="player-attributes-desc">
                    <p class="pos">Pos</p>

                    <p class="name">Name</p>

                    <p class="age">Age</p>

                    <p class="overall">OVR</p>

                    <p class="nationality">Nation</p>


                </div>
                <div class="player-attributes-content">
                    @if (!empty($user->team->players))
                        @foreach ($user->team->players as $player)
                            <div class="player-attributes-item">
                                <p class="pos">{{-- {{ $player->position }} --}} LM CM CAM</p>

                                <a class="name" href="{{ route('players.show', ['player' => $player]) }}">
                                    <img class="player-image" src="https://picsum.photos/50/50" alt="">
                                    {{ $player->name }}
                                </a>

                                <p class="age">{{ $player->age }}</p>

                                <p class="overall">{{ $player->overall }}</p>

                                <p class="nationality">{{ $player->nationality }}</p>
                            </div>
                        @endforeach
                    @else
                        <p>W Twojej druzynie nie ma obecnie zadnego piłkarza</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

</div>
