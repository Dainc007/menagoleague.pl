<section class="messages-list">
    <div class="players-list">
        @include('office.messages.inc.playerChat.playerChatList')
    </div>

    <div class="inbox-list hidden">
        @include('office.messages.inc.inbox.inbox')
    </div>

    <div class="notifications-list hidden">
        @include('office.messages.inc.notifications.notificationsList')
    </div>
</section>
