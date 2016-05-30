@extends('layouts.app')

@section('content')

 <div class="row">
  <div class="col-md-6 col-md-offset-3">
    <h1>{{ $sport->name }}</h1>
   
      <ul class="list-group">
        @foreach ($sport->games as $game) 
          <li class="list-group-item">
            <a href="/scorehub2.0/public/games/{{ $game->id }}">
            {{ $game->team1 }} VS {{ $game->team2 }}</a>
            <!-- <a href="#" style ="float:right">{{ $game->user->name }} </a> -->
          </li>
        @endforeach
      </ul>

      <h3>Add A New Game</h3>
        <form method="POST" action="/scorehub2.0/public/sports/{{ $sport->id }}/games">
          {{ csrf_field() }}
          <input type="hidden" name="sport_id" id="sport_id" value="{{ $sport->id }}">
           


            <div class="form-group">

              <textarea name="team1" class="form-control" placeholder="Enter Team 1 Name"></textarea>
              <textarea name="team2" class="form-control" placeholder="Enter Team 2 Name"></textarea>

            </div>

            <div class="form-group">

              <button type="submit" class="btn btn-primary">Add Game</button>

            </div>
        </form>
        @if (count($errors))
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        @endif
  </div>
</div>






@stop