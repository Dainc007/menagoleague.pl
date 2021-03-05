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
                    <form method="GET">
                        <input type="submit" name="editMode" class="btn btn-primary btn-sm" value="Tryb edycji danych">
                        @csrf
                    </form>
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
                                <td>Xboxdvr:</td>
                                <td><a onclick="confirm('przechodzisz teraz do portalu Xboxdvr')" target="_blank" href="https://gamerdvr.com/gamer/{{{$personal_data->name}}}">{{{$personal_data->name}}}</a></td>


                                @else
                                <td>Konsola:</td>
                                <td>{{$personal_data->device}}</td>
                                @endif
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