<div class="inbox-tabs">
    <div class="inbox-received">
        <a class="activeTab" message-type="received" href="#">Inbox</a>
    </div>
    <div class="inbox-sent">
        <a message-type="sent" href="#">Sent</a>
    </div>
    <div class="inbox-create">
        <a href="#">Send message</a>
    </div>
</div>

@include('office.messages.inc.inbox.received.receivedList')

@include('office.messages.inc.inbox.sent.sentList')
