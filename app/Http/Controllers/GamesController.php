<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Sport;
use App\Score;
use DB;

use App\Http\Requests;

class GamesController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth', ['only' => ['index', 'show', 'store']]);
    // }

    public function index()
    {
        $games = Game::all();

        return view('games.index', compact('games'));
    }
    
    public function show(Game $game)
    {

      $id = $game->id;
      $team1 = $game->team1;
      $team2 = $game->team2;

      $undo = DB::select(DB::raw("SELECT id 
          FROM scores 
          WHERE game_id = '$id' 
          ORDER BY id DESC LIMIT 1"));

      $sql = DB::select(DB::raw("SELECT game_id, team_name, 
          SUM(try_score) AS totalTry, 
          SUM(conversion) AS totalConversion, 
          SUM(penalty) AS totalPenalty, 
          (Sum(try_score*5) + Sum(conversion*2) +Sum(penalty*3)) AS totalScore 
          FROM scores 
          WHERE game_id = '$id' 
          AND team_name= '$team1'"));

      $sql2 = DB::select(DB::raw("SELECT game_id, team_name, 
          SUM(try_score) AS totalTry, 
          SUM(conversion) AS totalConversion, 
          SUM(penalty) AS totalPenalty, 
          (Sum(try_score*5) + Sum(conversion*2) +Sum(penalty*3)) AS totalScore 
          FROM scores 
          WHERE game_id = '$id' 
          AND team_name= '$team2'"));

      $sql3 = DB::select(DB::raw("SELECT game_id, team_name, 
          SUM(goal) AS totalGoal
          FROM scores 
          WHERE game_id = '$id' 
          AND team_name= '$team1'"));

      
      $sql4 = DB::select(DB::raw("SELECT game_id, team_name, 
          SUM(goal) AS totalGoal
          FROM scores 
          WHERE game_id = '$id' 
          AND team_name= '$team2'"));

      $sql5 = DB::select(DB::raw("SELECT game_id, team_name, 
          SUM(goal) AS totalGoal, 
          SUM(point) AS totalPoint,  
          (Sum(goal*3) + Sum(point)) AS totalScore 
          FROM scores 
          WHERE game_id = '$id' 
          AND team_name= '$team1'"));

      $sql6 = DB::select(DB::raw("SELECT game_id, team_name, 
          SUM(goal) AS totalGoal, 
          SUM(point) AS totalPoint,  
          (Sum(goal*3) + Sum(point)) AS totalScore 
          FROM scores 
          WHERE game_id = '$id' 
          AND team_name= '$team2'"));

      switch ($game->sport->id) {
        case '1':
          return view('games.showrugby', compact('game', 'sql', 'sql2', 'undo'));
          break;
        case '2':
          return view('games.showsoccer', compact('game', 'sql3', 'sql4'));
          break;
        case '3':
          return view('games.showgaa', compact('game', 'sql5', 'sql6'));
          break;
        
        default:
          echo("imsorry");
          break;
      }
      
    }
    
    public function show_all_gaa()
    {
       $sql = DB::select(DB::raw("SELECT DISTINCT g.id, team_name,
      SUM(goal) AS totalGoal,
      SUM(point) AS totalPoints,
      (Sum(point) + Sum(goal*3)) AS totalScore
      FROM games g, scores s
      WHERE g.id = s.game_id
      AND g.sport_id = 3
      -- AND s.team_name = g.team1
      GROUP BY id, team_name"));

      // $sql2 = DB::select(DB::raw("SELECT DISTINCT g.id, team_name,
      // SUM(goal) AS totalGoal2,
      // SUM(point) AS totalPoints2,
      // (Sum(point) + Sum(goal*3)) AS totalScore2
      // FROM games g, Scores s
      // WHERE g.id = s.game_id
      // AND g.sport_id = 3
      // AND s.team_name = g.team2
      // GROUP BY id, team_name"));

      return view('games.show_all_gaa', compact('sql'));
    }

    public function show_all_soccer()
    {
      $sql = DB::select(DB::raw("SELECT DISTINCT g.id, team_name,
      SUM(goal) AS totalGoal
      FROM games g, scores s
      WHERE g.id = s.game_id
      AND g.sport_id = 2
      -- AND s.team_name = g.team1
      GROUP BY id, team_name"));

      // $sql2 = DB::select(DB::raw("SELECT DISTINCT g.id, team_name,
      // SUM(goal) AS totalGoal
      // FROM games g, Scores s
      // WHERE g.id = s.game_id
      // AND g.sport_id = 2
      // AND s.team_name = g.team2
      // GROUP BY id, team_name"));


      

      return view('games.show_all_soccer', compact('sql'));
    }

    public function show_all_rugby()
    {
      $sql = DB::select(DB::raw("SELECT DISTINCT g.id, team_name,
      SUM(try_score) AS totalTry,
      SUM(conversion) AS totalConversion,
      SUM(penalty) AS totalPenalty,
      (Sum(try_score*5) + Sum(conversion*2) +Sum(penalty*3)) AS totalScore
      FROM games g, scores s
      WHERE g.id = s.game_id
      AND g.sport_id = 1
      GROUP BY id, team_name"));

     
      

      return view('games.show_all_rugby', compact('sql','sql2'));
    }
    public function store(Request $request, Sport $sport)
    {
      // $game = new Game;
      // $game->team1 = $request->team1;
      // $game->team2 = $request->team2;
      // $game->sport_id = $request->sport_id;
      // $game->user_id = $request->user_id;
      // $game->save();

      $this->validate($request, [
        'team1' => 'required',
        'team2' => 'required'
      ]);

      $game = new Game($request->all());
      

      $sport->addGame($game, 1);

      return back();
    }

}
