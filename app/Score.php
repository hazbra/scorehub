<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
     protected $fillable = ['team_name', 'goal', 'point'];
    
    public function game()
    {
      return $this->belongsTo(Game::class);
    }
}
