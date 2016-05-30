<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
use App\Game;
use App\Score;
use DB;


class ScoresController extends Controller
{
    
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }




    public function store(Request $request, Game $game)
    {
    	

    	//return $request->all();
    	//return $game;
    	$score = new Score; 

    	$score->team_name = $request->team_name;
    	$score->goal = $request->goal;
    	$score->point = $request->point;
        $score->try_score = $request->try_score;
        $score->conversion = $request->conversion;
        $score->penalty = $request->penalty;

    	$game->scores()->save($score);

    	return back();
    }

    public function undo_score(Request $request)
    {
        $id = $request->game_id;

        $undo = DB::select(DB::raw("DELETE FROM scores WHERE game_id = '$id' ORDER BY id DESC LIMIT 1"));

        return back();    
    }

    public function showonerugby(Game $game)
    {

        $id = $game->id;
        $team1 = $game->team1;
        $team2 = $game->team2;

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
      

      return view('scores.show_one_rugby', compact('sql', 'sql2', 'game'));
    }

    public function showonesoccer(Game $game)
    {

        $id = $game->id;
        $team1 = $game->team1;
        $team2 = $game->team2;

        $sql = DB::select(DB::raw("SELECT game_id, team_name, 
            SUM(goal) AS totalGoal
            FROM scores 
            WHERE game_id = '$id' 
            AND team_name= '$team1'"));

        
        $sql2 = DB::select(DB::raw("SELECT game_id, team_name, 
            SUM(goal) AS totalGoal
            FROM scores 
            WHERE game_id = '$id' 
            AND team_name= '$team2'"));
      

      return view('scores.show_one_soccer', compact('sql', 'sql2', 'game'));
    }

    public function showonegaa(Game $game)
    {

        $id = $game->id;
        $team1 = $game->team1;
        $team2 = $game->team2;

        $sql = DB::select(DB::raw("SELECT game_id, team_name, 
            SUM(goal) AS totalGoal, 
            SUM(point) AS totalPoint,  
            (Sum(goal*3) + Sum(point)) AS totalScore 
            FROM scores 
            WHERE game_id = '$id' 
            AND team_name= '$team1'"));

        $sql2 = DB::select(DB::raw("SELECT game_id, team_name, 
            SUM(goal) AS totalGoal, 
            SUM(point) AS totalPoint,  
            (Sum(goal*3) + Sum(point)) AS totalScore 
            FROM scores 
            WHERE game_id = '$id' 
            AND team_name= '$team2'"));
      

      return view('scores.show_one_gaa', compact('sql', 'sql2', 'game'));
    }


    public function index()
    {
        $scores = Score::all();

        return view('scores.index', compact('scores'));
    }
}
