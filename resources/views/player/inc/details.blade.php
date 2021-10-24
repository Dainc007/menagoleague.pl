<div class="details">
    <div class="stats">
        <div>
            <span class="starNum">
                <img src="/images/icons/star.png" alt="">
                <p>{{ $player->playerDetails->weakFoot }}</p>
            </span>
            <p>{{__('player.weakFoot')}}</p>
        </div>
        <div>
            <span class="starNum">
                <img src="/images/icons/star.png" alt="">
                <p>{{ $player->playerDetails->skillMoves }}</p>
            </span>
            <p>{{__('player.skillMoves')}}</p>
        </div>
        <div>
            <p>{{__('player.work')}}: <span>{{$player->playerDetails->attackingWorkRate}}/{{$player->playerDetails->defensiveWorkrate}}</span></p>
        </div>
        <div>
            <span class="foot">
                <img src="/images/icons/foot.png" alt="">
            </span>
            <p>{{__('player.foot')}}: <span>{{$player->playerDetails->preferredFoot}}</span></p>
        </div>
    </div>
    <div class="entities">

        <div class="entity traits">
            <h2>{{__('player.skills.summary')}}</h2>

            <div><span class="squareNum">{{ $player->playerDetails->paceTotal }}</span>
                <p>{{__('player.skills.pace')}}</p>
            </div>
            <div><span class="squareNum">{{ $player->playerDetails->shootingTotal }}</span>
                <p>{{__('player.skills.shooting')}}</p>
            </div>
            <div><span class="squareNum">{{ $player->playerDetails->passingTotal }}</span>
                <p>{{__('player.skills.passing')}}</p>
            </div>
            <div><span class="squareNum">{{ $player->playerDetails->dribblingTotal }}</span>
                <p>{{__('player.skills.dribbling')}}</p>
            </div>
            <div><span class="squareNum">{{ $player->playerDetails->defendingTotal }}</span>
                <p>{{__('player.skills.defending')}}</p>
            </div>
            <div><span class="squareNum">{{ $player->playerDetails->physicaliTytotal }}</span>
                <p>{{__('player.skills.physicality')}}</p>
            </div>
        </div>

        <div class="entity attack">
            <h2>{{$player->playerDetails->attackTotal}}Attacking</h2>

            <div><span class="squareNum">{{ $player->playerDetails->crossing }}</span>
                <p>{{__('player.skills.crossing')}}</p>
            </div>
            <div><span class="squareNum">{{ $player->playerDetails->finishing }}</span>
                <p>{{__('player.skills.finishing')}}</p>
            </div>
            <div><span class="squareNum">{{ $player->playerDetails->headingAccuracy }}</span>
                <p>{{__('player.skills.heading')}}</p>
            </div>
            <div><span class="squareNum">{{ $player->playerDetails->shortPassing }}</span>
                <p>{{__('player.skills.shortPassing')}}</p>
            </div>
            <div><span class="squareNum">{{ $player->playerDetails->volleys }}</span>
                <p>{{__('player.skills.volleys')}}</p>
            </div>
        </div>

        <div class="entity skill">
            <h2>{{__('player.skills.skill')}}</h2>

            <div><span class="squareNum">{{ $player->playerDetails->dribbling }}</span>
                <p>{{__('player.skills.dribbling')}}</p>
            </div>
            <div><span class="squareNum">{{ $player->playerDetails->curve }}</span>
                <p>{{__('player.skills.curve')}}</p>
            </div>
            <div><span class="squareNum">{{ $player->playerDetails->FKAccuracy }}</span>
                <p>{{__('player.skills.fka')}}</p>
            </div>
            <div><span class="squareNum">{{ $player->playerDetails->longPassing }}</span>
                <p>{{__('player.skills.longPassing')}}</p>
            </div>
            <div><span class="squareNum">{{ $player->playerDetails->ballControl }}</span>
                <p> {{__('player.skills.ballControl')}}</p>
            </div>
        </div>

        <div class="entity movement">
            <h2>{{__('player.skills.movement')}}</h2>

            <div><span class="squareNum">{{ $player->playerDetails->acceleration }}</span>
                <p>{{__('player.skills.acc')}}</p>
            </div>
            <div><span class="squareNum">{{ $player->playerDetails->sprintSpeed }}</span>
                <p>{{__('player.skills.sprint')}}</p>
            </div>
            <div><span class="squareNum">{{ $player->playerDetails->agility }}</span>
                <p>{{__('player.skills.agility')}}</p>
            </div>
            <div><span class="squareNum">{{ $player->playerDetails->reactions }}</span>
                <p>{{__('player.skills.reactions')}}</p>
            </div>
            <div><span class="squareNum">{{ $player->playerDetails->balance }}</span>
                <p>{{__('player.skills.balance')}}</p>
            </div>
        </div>

        <div class="entity power">
            <h2>{{__('player.skills.power')}}</h2>

            <div><span class="squareNum">{{ $player->playerDetails->shotPower }}</span>
                <p>{{__('player.skills.shotPower')}}</p>
            </div>
            <div><span class="squareNum">{{ $player->playerDetails->jumping }}</span>
                <p>{{__('player.skills.jumping')}}</p>
            </div>
            <div><span class="squareNum">{{ $player->playerDetails->stamina }}</span>
                <p>{{__('player.skills.stamina')}}</p>
            </div>
            <div><span class="squareNum">{{ $player->playerDetails->strength }}</span>
                <p>{{__('player.skills.strength')}}</p>
            </div>
            <div><span class="squareNum">{{ $player->playerDetails->longShots }}</span>
                <p>{{__('player.skills.longShots')}}</p>
            </div>
        </div>

        <div class="entity mentality">
            <h2>{{__('player.skills.mentality')}}</h2>

            <div><span class="squareNum">{{ $player->playerDetails->aggression }}</span>
                <p>{{__('player.skills.aggression')}}</p>
            </div>
            <div><span class="squareNum">{{ $player->playerDetails->interceptions }}</span>
                <p>{{__('player.skills.interceptions')}}</p>
            </div>
            <div><span class="squareNum">{{ $player->playerDetails->positioning }}</span>
                <p>{{__('player.skills.positioning')}}</p>
            </div>
            <div><span class="squareNum">{{ $player->playerDetails->vision }}</span>
                <p>{{__('player.skills.vision')}}</p>
            </div>
            <div><span class="squareNum">{{ $player->playerDetails->penalties }}</span>
                <p>{{__('player.skills.penalties')}}</p>
            </div>
            <div><span class="squareNum">{{ $player->playerDetails->composure }}</span>
                <p>{{__('player.skills.composure')}}</p>
            </div>
        </div>

        <div class="entity defending">
            <h2>{{__('player.skills.defending2')}}</h2>

            <div><span class="squareNum">{{ $player->playerDetails->marking }}</span>
                <p>{{__('player.skills.marking')}}</p>
            </div>
            <div><span class="squareNum">{{ $player->playerDetails->standingTackle }}</span>
                <p>{{__('player.skills.standing')}}</p>
            </div>
            <div><span class="squareNum">{{ $player->playerDetails->slidingTackle }}</span>
                <p>{{__('player.skills.sliding')}}</p>
            </div>
        </div>

        <div class="entity goalkeeping">
            <h2>{{__('player.skills.gk')}}</h2>

            <div><span class="squareNum">{{ $player->playerDetails->GKDiving }}</span>
                <p>{{__('player.skills.diving')}}</p>
            </div>
            <div><span class="squareNum">{{ $player->playerDetails->GKHandling }}</span>
                <p>{{__('player.skills.handling')}}</p>
            </div>
            <div><span class="squareNum">{{ $player->playerDetails->GKKicking }}</span>
                <p>{{__('player.skills.kicking')}}</p>
            </div>
            <div><span class="squareNum">{{ $player->playerDetails->GKPositioning }}</span>
                <p>{{__('player.skills.positioning')}}</p>
            </div>
            <div><span class="squareNum">{{ $player->playerDetails->GKReflexes }}</span>
                <p>{{__('player.skills.reflex')}}</p>
            </div>
        </div>

    </div>
</div>
