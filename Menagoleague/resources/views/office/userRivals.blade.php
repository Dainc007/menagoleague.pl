@foreach($user->rivals as $rival)
{{$rival->name}}
@if($rival->team) ({{$rival->team->name}}) @endif
<form action="" method="POST">
    <select name="rival" class="custom-select">
        @foreach($user->getUsersByDeviceId() as $username)
        <option>{{$username}}</option>
        @endforeach
    </select>

    <input class="btn btn-sm btn-danger" type="submit" value="Zaproponuj rywalizację">
    @csrf
    @method('POST')
</form>
@endforeach