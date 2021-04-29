{{$player->name}}
{{$player->device}}
{{$player->nationality}}
{{$player->position}}
{{$player->overall}}
{{$player->age}}

@if($player->team)
{{$player->wage}}
{{$player->contract_lenght}}
{{$player->team->name}}
@endif

@if($player->personality)
{{$player->personality->fame}}
{{$player->personality->greed}}
{{$player->personality->satisfaction}}
{{$player->personality->leadership}}
@endif