<home-nav 
    :items="[
        {name: '{{ __('nav.homeNav.central') }}', link: '{{ route('login') }}'},
        {name: '{{ __('nav.homeNav.team') }}', link: '{{route('team')}}'},
        {name: '{{ __('nav.homeNav.transfers') }}', link: '{{route('transfers')}}'},
        {name: '{{ __('nav.homeNav.office') }}', link: '{{route('office')}}'},
        {name: '{{ __('nav.homeNav.season') }}', link: '{{route('season')}}'},
    ]"
/>