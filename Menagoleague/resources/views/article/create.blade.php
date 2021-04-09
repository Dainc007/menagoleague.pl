@extends('layouts.basic')

<div class="container">
    <form method="POST" action="{{route('article.store')}}">
        <div class="row">

            <div class="col-10 offset-1 py-1">

                <label for="device">{{ __('auth.device') }}</label>
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

            <div class="col-10 offset-1 py-1">
                <input type="text" name="title" id="title" class="form-control" placeholder="{{ __('articles.create.title') }}">
            </div>

            <div class="col-10 offset-1 py-1">
                <textarea class="form-control" name="content" id="content" placeholder="{{ __('articles.create.content') }}" rows="3"></textarea>
            </div>


            <!-- Zarówno wybierane IMG lub wrzucone moze byc tylko jedno, a inputy powinny miec ta sama nazwe, bo sa wymagane -->
            <div class="col-10 offset-1 py-1">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">
                        <img class="img-fluid" src="{{asset('/storage/shields/5.png')}}">
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">
                        <img class="img-fluid" src="{{asset('/storage/shields/5.png')}}">
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">
                        <img class="img-fluid" src="{{asset('/storage/shields/5.png')}}">
                    </label>
                </div>
            </div>

            <div class="col-10 offset-1 py-1">
                <label for="img">{{ __('articles.create.img') }}</label>
                <input type="file" class="form-control-file" id="img" name="img">
            </div>
            <div class="col-10 offset-1 py-1">
                <input type="submit" class="btn btn-success">
            </div>
            @csrf
        </div>
    </form>
</div>