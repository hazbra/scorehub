<style>
table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th { 
    background-color: #4CAF50;
    color: white;}

th, td {
    padding: 15px;
}
</style>

<table>
  <tr>
    
 
    <th>Team</th>
    <th>Goals</th>
    <th>Points</th>
    <th>TotalScore</th>
  </tr>

  <tr>
  <td>{{ $game->team1 }}</td>
    @foreach($sql as $row)
        <td>{{ $row->totalGoal }}</td>
        <td>{{ $row->totalPoint }}</td>
        <td>{{ $row->totalScore }}</td>
      </div>
    </tr>
    @endforeach
    <tr>
    <td>{{ $game->team2 }}</td>

     @foreach($sql2 as $row)
        <td>{{ $row->totalGoal}}</td>
        <td>{{ $row->totalPoint }}</td>
        <td>{{ $row->totalScore }}</td>
      </div>
    </tr>
    @endforeach
</table>


       
     


