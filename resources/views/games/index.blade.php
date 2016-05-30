@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Scores</div>

                <div class="panel-body">

                    @foreach($games as $game) 
                    <div>
                      <a href="/scorehub2.0/public/games/{{ $game->id }}"> {{ $game->id }} </a>
                    </div>
                  @endforeach

                  <h3>Create Game:</h3>

                      <form method="POST" action="/scorehub2.0/public/makeGame">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">

                          <textarea name="team1" class="form-control">Enter Team 1 Name</textarea>
                          <textarea name="team2" class="form-control">Enter Team 2 Name</textarea>

                        </div>

                        <div class="form-group">

                          <button type="submit" class="btn btn-primary">Add Game</button>

                        </div>
                        

                      </form>
                </div>
            </div>
        </div>
    </div>
</div>


@stop
