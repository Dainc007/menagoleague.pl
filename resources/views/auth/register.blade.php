@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card register">
                <div class="card-header">{{ __('auth.register') }}</div>
                <div class="card-body">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="device"
                                class="col-md-4 col-form-label text-md-right">{{ __('auth.device') }}</label>

                            <div class="col-md-6 justify-content-center d-flex">
                                <div class="form-check form-check-inline register-radios mr-3">
                                    <input checked class="form-check-input" type="radio" name="device" id="device_xbox"
                                        value="xbox">
                                    <label for="device_xbox"><img src="./images/xbox-icon.svg" alt="xbox" /></label>
                                </div>

                                <div class="form-check form-check-inline register-radios mr-3">
                                    <input class="form-check-input" type="radio" name="device" id="device_playstation"
                                        value="playstation">
                                    <label for="device_playstation"><img src="./images/playstation-icon.svg"
                                            alt="playstation" /></label>
                                </div>

                                <div class="form-check form-check-inline register-radios mr-3">
                                    <input class="form-check-input" type="radio" name="device" id="device_pc" value="pc">
                                    <label for="device_pc"><img src="./images/pc-icon.svg" alt="PC" /></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="version">Posiadam FIFĘ w
                                wersji:</label>

                            <div class="col-md-6">
                                <select class="form-control @error('version') is-invalid @enderror" name="version"
                                    id="version" required>
                                    <option selected value="">Wybierz wersję</option>
                                    <option value="old-gen">Old-gen (Xbox One, Ps4) </option>
                                    <option value="next-gen">Next-gen (Xbox Series S|X, Ps5) </option>
                                    <option value="ultimate">Obie wersje (Ultimate) </option>
                                </select>

                                @error('version')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name"
                                class="col-md-4 col-form-label text-md-right">{{ __('auth.username') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name"
                                    placeholder="GamerTag, PSN lub nick Origin" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('auth.email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('auth.pass') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right">{{ __('auth.confirm') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="recommendation"
                                class="col-md-4 col-form-label text-md-right">{{ __('auth.recommendation') }}</label>

                            <div class="col-md-6">
                                <input id="recommendation" type="text" class="form-control" name="recommendation">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12 text-center mb-3">
                                <small clas="text-center">{{ __('auth.recommendation.details') }}</small>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="discord"
                                class="col-md-4 col-form-label text-md-right">{{ __('auth.discord') }}</label>

                            <div class="col-md-6">
                                <input id="discord" type="text" class="form-control @error('discord') is-invalid @enderror"
                                    name="discord" value="{{ old('discord') }}" placeholder="np: SnaggyDainc#3572"
                                    autocomplete="discord" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="facebook"
                                class="col-md-4 col-form-label text-md-right"><i>{{ __('auth.fb') }}</i></label>

                            <div class="col-md-6">
                                <input id="facebook" type="text"
                                    class="form-control @error('facebook') is-invalid @enderror" name="facebook"
                                    value="{{ old('facebook') }}" autocomplete="facebook">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button name="register" type="submit" class="btn btn-success bshadow">
                                    {{ __('auth.join') }}
                                </button>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <small>{{ __('auth.statute.annoucement') }} <a href="">{{ __('auth.statute') }}</a> i
                                    <a href="">{{ __('auth.policy') }}</a></small>
                            </div>
                        </div>

                </div>

                </form>

            </div>
        </div>
    </div>

    </div>
    </div>
@endsection
