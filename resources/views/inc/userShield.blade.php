@if(auth()->user()->team)
    <user-shield
        :team="'{{auth()->user()->team->name}}'"
        :image="'{{ env('TEAM_SRC')}}{{auth()->user()->team->sofifa_id}}{{'.png'}}'"
        :username="'{{ auth()->user()->name }}'"
        :overall="100"
    />
@else
    <user-shield
        :team=" '{{__('home.noTeam')}}' "
        :image="'{{ asset('storage/shields/ml.png') }}'"
        :username="'{{ auth()->user()->name }}'"
        :overall="100"
    />
@endif