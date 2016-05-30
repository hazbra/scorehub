<?php




namespace App;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    public function games()
    {
    	return $this->hasMany(Game::class);

    }

    public function addGame(Game $game, $userid)
    {
    	$game->user_id = $userid;
      	return $this->games()->save($game);
    }
}



