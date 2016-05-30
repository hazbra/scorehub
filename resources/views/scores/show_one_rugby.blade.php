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
    width: 20%
   
}
</style>

  

<div style="overflow-x:auto;">
    <table>
      <tr>
        
     
        <th>Team</th>
        <th>Trys</th>
        <th>Cons</th>
        <th>Pens/DGs</th>
        <th>Total</th>
    	  </tr>

      <tr>
      <td>{{ $game->team1 }}</td>
        @foreach($sql as $row)
            <td>{{ $row->totalTry }}</td>
            <td>{{ $row->totalConversion }}</td>
            <td>{{ $row->totalPenalty }} </td>
            <td>{{ $row->totalScore }}</td>
          </div>
        </tr>
        @endforeach
        <tr>
        <td>{{ $game->team2 }}</td>

         @foreach($sql2 as $row)
            <td>{{ $row->totalTry }}</td>
            <td>{{ $row->totalConversion }}</td>
            <td>{{ $row->totalPenalty }} </td>
            <td>{{ $row->totalScore }}</td>
          </div>
        </tr>
        @endforeach
    </table>
</div>


       
     


