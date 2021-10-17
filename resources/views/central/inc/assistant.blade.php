<section class="central-team-mailbox">
    <div class="headers-standings">
        <h2>{{__('central.assistant.title')}}</h2>
    </div>

    <div class="central-team-mailbox-content">
        <div class="team-mailbox-sender">
            <img src="{{ url('/images/placeholder-person.svg') }}" alt="" />
            <div>
                <p class="team-mailbox-sender-name">Stefcio Drążyskała</p>
                <p class="team-mailbox-sender-proffesion">{{__('central.assistant.job')}}</p>
            </div>
        </div>
        <div class="central-team-mailbox-messages">
            <div class="track-team-mailbox-messages">
                <!-- Notifications -->
                <div class="message-item">
                    @if($user->notifications)
                    @foreach($user->notifications as $message)
                    <div class="team-mailbox-date">{{now()}}</div>

                    <div class="message">
                        <b>{{ __($message->title, ['name' => $user->name]) }}</b><br>
                        {{ __($message->content, ['name' => $user->name]) }}
                    </div>
                    @endforeach
                    @endif
                </div>
                <!-- END -->

                <!-- Tutorial -->
                <div class="message-item">
                    <div class="team-mailbox-date">{{now()}}</div>

                    <div class="message">
                        @include('central.inc.tutorialForm')
                    </div>
                </div>
                <!-- END -->


            </div>
        </div>
    </div>
</section>