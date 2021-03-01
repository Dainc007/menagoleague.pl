@extends('layouts.basic')

@section('content')
<div class="container">
    <div class="row justify-content-center my-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$personal_data->name}}</div>

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
                                <td>
                                    <button class="btn btn-primary btn-sm">Edytuj</button>
                                    <button class="btn btn-danger btn-sm">Usuń</button>
                                </td>
                            </tr>
                            <tr>
                                <td>facebook:</td>
                                <td><a onclick="confirm('przechodzisz teraz do portalu facebook')" target="_blank" href="https://www.facebook.com/{{{$personal_data->facebook}}}">{{{$personal_data->facebook}}}</a></td>
                                <td>
                                    <button class="btn btn-primary btn-sm">Edytuj</button>
                                    <button class="btn btn-danger btn-sm">Usuń</button>
                                </td>
                            </tr>
                            <tr>
                                @if($personal_data->device == 'Xbox')
                                <td>Xboxdvr:</td>
                                <td><a onclick="confirm('przechodzisz teraz do portalu Xboxdvr')" target="_blank" href="https://gamerdvr.com/gamer/{{{$personal_data->name}}}">{{{$personal_data->name}}}</a></td>
                                
                                
                                @else
                                <td>Konsola:</td>
                                <td>{{$personal_data->device}}</td>
                                @endif
                                <td>
                                    <button class="btn btn-primary btn-sm">Edytuj</button>
                                    <button class="btn btn-danger btn-sm">Usuń</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    

                    <form method="POST" action="{{route('account.update', ['id' => 1])}}">
                        @csrf
                        <input type="number" name="discord" id="discord">
                        <input type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection