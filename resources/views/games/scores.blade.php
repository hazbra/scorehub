<div id = thisgame></div>
      <h1>{{ $score->game_id }}</h1>

      <ul class="list-group">
        @foreach ($score as $team) 
          <li class="list-group-item">{{ $team }}</li>

        @endforeach
      </ul>
     

            


       
   
