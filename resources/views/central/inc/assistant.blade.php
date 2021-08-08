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
                <div class="message-item">
                    <div class="team-mailbox-date">{{now()}}</div>

                    <div class="message">
                        @include('inc.tutorialForm')
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
