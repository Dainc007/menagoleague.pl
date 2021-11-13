<section class="central-team-mailbox">
    <div class="headers-standings">
        <h2>{{ __('central.assistant.title') }}</h2>
    </div>

    <div class="central-team-mailbox-content">
        <!--        <div class="team-mailbox-sender">
            <img src="{{ url('/images/placeholder-person.svg') }}" alt="" />
            <div>
                <p class="team-mailbox-sender-name">Stefcio Drążyskała</p>
                <p class="team-mailbox-sender-proffesion">{{ __('central.assistant.job') }}</p>
            </div>
        </div>-->
        <div class="central-team-mailbox-messages">
            <div class="track-team-mailbox-messages">

                <!-- jobApplications -->
                @if ($user->jobApplications->where('status', 'accepted') && $user->jobApplications->where('status', 'accepted')->count() > 0)
                    <div class="message-item">

                        <div class="team-mailbox-date">{{ now() }}</div>

                        <div class="message">
                            @include('central.inc.jobsForm')
                        </div>

                    </div>
                @endif
                <!-- END -->

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
                            {{-- Menago toast --}}
                            <div class="menago-toast">
                                <div class="menago-toast-header">
                                    <div class="header">
                                        <p>
                                            {{ __($message->title, ['name' => $user->name]) }}
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi aut numquam
                                            deleniti et voluptas enim, sint pariatur ipsum maiores sequi?
                                        </p>
                                    </div>

                                    <div class="date-close">
                                        <div class="date">{{ $message->created_at }}</div>
                                        <button class="close" data-id="{{ $message->id }}"> &times; </button>
                                    </div>
                                </div>

                                <div class="menago-toast-body">
                                    <p>
                                        {{ __($message->content, ['name' => $user->name, 'message' => $message->message]) }}
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat aut at
                                        accusamus sapiente, voluptates necessitatibus dolore officia eius omnis saepe.
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <!-- END -->
            </div>
        </div>
    </div>
</section>
