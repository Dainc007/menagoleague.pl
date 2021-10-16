<section class="messages-text">
    <div class="messages-chat">
        @include('office.messages.inc.playerChat.playerChatMessages')
    </div>


    <div class="messages-inbox hidden">
        @include('office.messages.inc.inbox.received.receivedMessages')
        @include('office.messages.inc.inbox.sent.sentMessages')
    </div>

    <div class="messages-notifications hidden">
        @include('office.messages.inc.notifications.notificationsMessages')
    </div>
</section>
