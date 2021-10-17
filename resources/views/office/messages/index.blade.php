@extends('layouts.app')

@section('title', 'Wiadomości')

@section('content')
<div class="messages-tabs">
<div class="messages-notifications active">
        <a href="#">Notifications</a>
         <span class="notification">2</span>
     </div>
    <div class="messages-player">
       <a href="#">Player chat</a>
        <span class="notification">2</span>
    </div>
    <div class="messages-inbox">
        <a href="#">Inbox</a>
        <span class="notification">2</span>
    </div>
</div>
<div class="messages-content">
    @include('office.messages.list')
    @include('office.messages.text')
</div>
@endsection