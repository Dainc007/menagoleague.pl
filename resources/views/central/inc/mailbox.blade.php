<section class="central-team-mailbox">
    <div class="headers-standings">
        <h2>TEAM MAILBOX</h2>
    </div>

    <div class="central-team-mailbox-content">
        <div class="team-mailbox-sender">
            <img src="{{ url('/images/placeholder-person.svg') }}" alt="" />
            <div>
                <p class="team-mailbox-sender-name">Stefcio Drążyskała</p>
                <p class="team-mailbox-sender-proffesion">Coach assistant</p>
            </div>
        </div>
        <div class="central-team-mailbox-messages">
            <div class="track-team-mailbox-messages">
                <div class="message-item">
                    <div class="team-mailbox-date">26.07.2021 18:43:00</div>

                    <div class="message">
                        @include('inc.tutorialForm')
                    </div>
                </div>

                @for ($i = 27; $i < 30; $i++)
                    <div class="message-item">
                        <div class="team-mailbox-date">{{ $i }}.07.2021 18:43:00</div>
                        <div class="message">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consequatur sapiente fuga?
                            Enim
                            facere ducimus nostrum repudiandae ipsum et aliquam atque quod nam unde tempora,
                            fugit quo in rem maiores officia labore nemo perspiciatis nesciunt. Veniam nisi esse omnis
                            quidem.
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</section>

{{-- @include('inc.tutorialForm') --}}
