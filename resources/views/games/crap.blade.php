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
            <th>Score</th>
            <th>Total</th>
             <th>TotalScore</th>
             <th>Score</th>
             <th>Team</th>



      	  </tr>

          
            @foreach($sql as $row)
            <tr>
                <td>{{ $row->team_name }}</td>
                <td>{{ $row->totalGoal }} - 
                {{ $row->totalPoints}}</td>
                <td>{{ $row->totalScore}}</td>
            
            @endforeach

             @foreach($sql2 as $row2)
            
                <td>{{ $row2->totalScore }}</td>
                <td>{{ $row2->totalGoal }} - 
                {{ $row2->totalPoints}}</td>
                <td>{{ $row2->team_name }}</td>
            </tr>
            @endforeach
        </table>


       
 
