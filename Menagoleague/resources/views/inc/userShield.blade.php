@if(auth()->user()->team)
    <user-shield 
        :team="'{{auth()->user()->team->name}}'"
        :image="'{{ asset('storage/shields/5.png') }}'"
        :username="'{{ auth()->user()->name }}'"
        :overall="100"
    />
@else
    <user-shield 
        :team="'Bez klubu'"
        :image="'{{ asset('storage/shields/5.png') }}'"
        :username="'{{ auth()->user()->name }}'"
        :overall="100"
    />
@endif