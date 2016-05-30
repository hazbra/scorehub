<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['team1', 'team2'];

    public function by(User $user)
    {
      $this->user_id = $user->id;
    }
    
    public function Sport()
    {
      return $this->belongsTo(Sport::class);
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function scores()
    {
      return $this->hasMany(Score::class);

    }

    public function addScore(Score $score)
    {
      return $this->scores()->save($score);
    }
}