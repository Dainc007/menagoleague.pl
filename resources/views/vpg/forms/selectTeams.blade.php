@extends('layouts.basic')

@section('content')
  <div class="container">
      <div class="row m-3">
          <div class="col">
              <form method="POST" action="{{route('vpg.compare')}}">
                  <div class="row">
                      <div class="col">
                          <select class="custom-select" name="team1" required>
                              <option selected>Pick team</option>
                          @foreach($teams as $team)
                              <option value="{{$team['id']}}">{{$team['name']}}</option>
                              @endforeach
                          </select>
                      </div>
                      <div class="col text-center">
                          vs
                      </div>
                      <div class="col">
                          <select class="custom-select" name="team2" required>
                              <option selected>Pick team</option>
                          @foreach($teams as $team)
                                  <option value="{{$team['id']}}">{{$team['name']}}</option>
                              @endforeach
                          </select>
                      </div>
                  </div>
                  <div class="row mt-3">
                      <div class="col">
                          <button type="submit" class="btn btn-success w-100">Submit</button>
                      </div>
                  </div>
                  @csrf
              </form>
          </div>
      </div>
  </div>
@endsection
