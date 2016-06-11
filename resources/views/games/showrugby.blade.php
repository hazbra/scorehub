@extends('layouts.app')  
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src='/js/matchFunctions.js'></script>

<script>
  window.twttr = (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
    if (d.getElementById(id)) return t;
    js = d.createElement(s);
    js.id = id;
    js.src = "https://platform.twitter.com/widgets.js";
    fjs.parentNode.insertBefore(js, fjs);
    t._e = [];
    t.ready = function(f) {
      t._e.push(f);
    };
    return t;
  }(document, "script", "twitter-wjs"));
</script>



  <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '955957134441597',
      xfbml      : true,
      version    : 'v2.6'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>


@section('content')

<div class = "row">
  <div class="col-md-6 col-md-offset-3">
    @foreach($sql as $row)
    @endforeach
    @foreach($sql2 as $row2)
    @endforeach
    @foreach($undo as $row3)
    @endforeach
    <br>
    <form method="POST" action="/games/{{ $game->id }}/scores">
      <div class="form-group">
      {{ csrf_field() }}

        <input name="team_name" class="form-control" id = "team_name1" value="{{ $game->team1 }}" readonly></input>
        <div class = "contain">
          <button class="btn btn-default" type="submit" name = "try_score" id="try_score">Try</button>
          <button class="btn btn-default" type ="submit" name="conversion" id="conversion">Conversion</button>
          <button class="btn btn-default" type="submit" name = "penalty" id="penalty">Penalty/Drop Goal</button>
        </div>
        <p></p>
        
        <div id="showrugby"></div>
        <br>
        
        <input name="team_name" class="form-control" id = "team_name2" value="{{ $game->team2 }}" readonly></input>
        
        <div class = "contain">
          <button class="btn btn-default" type="submit" name = "try_score1" id="try_score1">Try</button>
          <button class="btn btn-default" type ="submit" name="conversion1" id="conversion1">Conversion</button>
          <button class="btn btn-default" type="submit" name = "penalty1" id="penalty1">Penalty/Drop Goal</button>
        </div>

        <input type="hidden" name="game_id" id="game_id" value="{{ $game->id }}">
      </div>
    </form>
</div>


<div class ="row">

    <div class="col-md-6 col-md-offset-3">  

      <div id="timer" class="text-center"><h4>Game Clock: <span class="value">00:00:00</span></h4></div>
      <p>
      <div class="text-center">
        <input class="btn btn-default" type="button" value = "start" onClick="start();"> | 
        <input class="btn btn-default" type="button" value = "pause" onClick="stop();"> |  
        <input class="btn btn-default" type="button" value = "reset" onClick="resettimer();">
        </div>
      </p>

      
    <div class="text-center">
    <form method="POST" action="/games/{{ $game->id }}/undo">
      <button class="btn btn-warning" type="submit" name = "undo" id="undo">Undo Last Score</button>
      {{ csrf_field() }}
   
      <input type="hidden" name="last_score1" id="last_score1" value="{{ $row3->id}}">      
    </form>
  </div>
    </div>
</div>


<hr>
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <div class="panel panel-default">
      <div class="panel-heading">Share Scores</div>
        <div style="float:left">
          <link rel="canonical" href="http://scorehub.info">    
          <a class="twitter-share-button"
            href="https://twitter.com/intent/tweet?text={{ $game->team1 }} {{ $row->totalScore }} {{ $game->team2 }} {{ $row2->totalScore}} #scorehub #omg"
            data-size="large">
          </a>
        </div>
        <div style="float:right">         
          <button class = "btn btn-primary" onclick="myFacebookLogin()">Share Score on Facebook</button> 
        </div>
      </div>
    </div>
  </div>
</div>

<script>
// Only works after `FB.init` is called
function myFacebookLogin() {
  FB.login(function(){
     FB.api('/me/feed', 'post', {message: '{{ $game->team1 }} {{ $row->totalScore }} {{ $game->team2 }} {{ $row2->totalScore}} #scorehub #omg'});
  }, {scope: 'publish_actions'});
}
</script>
@endsection
