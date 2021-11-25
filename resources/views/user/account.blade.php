@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center my-3">
        <div class="col-md-8">
            <div class="card">
                @if($data->editMode)
                @include('user.edit')
                @else
                <div class="card-header d-flex justify-content-between">
                    {{$personal_data->name}}
{{--                    <form method="GET">--}}
{{--                        <input type="submit" name="editMode" class="btn btn-primary btn-sm" value="Tryb edycji danych">--}}
{{--                        @csrf--}}
{{--                    </form>--}}
                </div>

                <div class="card-body justify-content-around">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <td>E-mail:</td>
                                <td>{{$personal_data->email}}</td>
                            </tr>
                            <tr>
                                <td>Discord:</td>
                                <td>#{{$personal_data->discord}}</td>
                            </tr>
                            <tr>
                                <td>facebook:</td>
                                <td><a onclick="confirm('przechodzisz teraz do portalu facebook')" target="_blank" href="https://www.facebook.com/{{{$personal_data->facebook}}}">{{{$personal_data->facebook}}}</a></td>
                            </tr>
                            <tr>
                                @if($personal_data->device == 'Xbox')
                                <td>Klipy:</td>
                                <td><a onclick="confirm('przechodzisz teraz do portalu Xboxdvr')" target="_blank" href="{{env('Xboxdvr')}}{{{$personal_data->name}}}">{{{$personal_data->name}}}</a></td>


                                @else
                                <td>Konsola:</td>
                                <td>{{$personal_data->device->device}}</td>
                                @endif
                            </tr>


                            <tr>
                                <td>Wersja Fify:</td>
                                <td>{{$personal_data->version}}</td>
                            </tr>

                            <tr>
                                <td>Poleceni gracze:</td>
                                <td>
                                    @foreach($personal_data->getRecommendedUsers() as $user)
                                        <a href="{{route('user.show', $user->id)}}">{{$user->name}}, </a>
                                    @endforeach
                                </td>
                            </tr>

                            <tr>
                                <td>Odwieczni Rywale:</td>
                                <td>
                                    @foreach($personal_data->rivals as $rival)
                                        <a href="{{route('user.show', $rival->id)}}">{{$rival->name}}, </a>
                                    @endforeach
                                </td>
                            </tr>



                        </tbody>
                    </table>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
