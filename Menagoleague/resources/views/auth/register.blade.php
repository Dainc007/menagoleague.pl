@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">{{ __('auth.register') }}</div>
                <div class="card-body">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="device" class="col-md-4 col-form-label text-md-right">{{ __('auth.device') }}</label>

                            <div class="col-md-6 justify-content-center d-flex">

                                <div class="form-check form-check-inline">
                                    <input checked class="form-check-input" type="radio" name="device" id="xbox" value="xbox">
                                    <label class="form-check-label" for="xbox"><i class="fab fa-xbox"></i></label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="device" id="playstation" value="playstation">
                                    <label class="form-check-label" for="playstation"><i class="fab fa-playstation"></i></label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="device" id="pc" value="pc">
                                    <label class="form-check-label" for="pc"><i class="fas fa-laptop"></i></label>
                                </div>



                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('auth.username') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="GamerTag, PSN lub nick Origin" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('auth.email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('auth.pass') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('auth.confirm') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="discord" class="col-md-4 col-form-label text-md-right">{{ __('auth.discord') }}</label>

                            <div class="col-md-6">
                                <input id="discord" type="text" class="form-control @error('discord') is-invalid @enderror" name="discord" value="{{ old('discord') }}" placeholder="np: SnaggyDainc#3572" autocomplete="discord" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="facebook" class="col-md-4 col-form-label text-md-right"><i>{{ __('auth.fb') }}</i></label>

                            <div class="col-md-6">
                                <input id="facebook" type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value="{{ old('facebook') }}" autocomplete="facebook">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('auth.join') }}
                                </button>
                            </div>
                        </div>



                    </form>

                </div>
            </div>


        </div>
    </div>

</div>
</div>
@endsection