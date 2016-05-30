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
    width: 33%  
}
#every2nd tr:nth-of-type(2n) td {
    border-bottom: 3px solid #4CAF50;
}
</style>




     
        <table>
          <tr>
         
            <th>Team</th>
            <th>Score</th>
                </tr>
        </table>

        <table id="every2nd">

          
            @foreach($sql as $row)
            <tr>
                <td>{{ $row->team_name }}</td>
                <td>{{ $row->totalGoal }} - 
                {{ $row->totalPoints}}</td>
              
            
            @endforeach
            </tr>
        </table>


       
 
