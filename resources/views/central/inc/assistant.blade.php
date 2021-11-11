<section class="central-team-mailbox">
    <div class="headers-standings">
        <h2>{{ __('central.assistant.title') }}</h2>
    </div>

    <div class="central-team-mailbox-content">
        <div class="team-mailbox-sender">
            <img src="{{ url('/images/placeholder-person.svg') }}" alt="" />
            <div>
                <p class="team-mailbox-sender-name">Stefcio Drążyskała</p>
                <p class="team-mailbox-sender-proffesion">{{ __('central.assistant.job') }}</p>
            </div>
        </div>
        <div class="central-team-mailbox-messages">
            <div class="track-team-mailbox-messages">

                <!-- Tutorial -->
                @if (!$user->isManager())
                    <div class="message-item">
                        <div class="team-mailbox-date">{{ now() }}</div>

                        <div class="message">
                            @include('central.inc.tutorialForm')
                        </div>
                    </div>
                @endif
                <!-- END -->

                <!-- Notifications -->
                <div class="message-item">
                    @if ($user->notifications)
                        @foreach ($user->getNewNotifications as $message)
                            <div class="team-mailbox-date"></div>
                            
                            <div class="message shadow mb-3" id="message{{ $message->id }}">
                                {{ $message->created_at }}
                                <p class="text-center mb-3"><b>{{ __($message->title, ['name' => $user->name]) }}</b>
                                </p>
                                <p class="text-center mb-3">
                                    {{ __($message->content, ['name' => $user->name, 'message' => $message->message]) }}</p>
                                <button class="confirm btn w-100" style="border: 1px solid #558c47"
                                    data-id="{{ $message->id }}">Oznacz jako
                                    przeczytane</button>
                            </div>

                        @endforeach
                    @endif
                </div>
                <!-- END -->
            </div>
        </div>
    </div>
</section>
