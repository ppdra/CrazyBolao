<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPoint extends Model
{
    /** @use HasFactory<\Database\Factories\UserPointFactory> */
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function game()
    {
        return $this->belongsTo(Game::class, 'game_id');
    }

    public function bet()
    {
        return $this->belongsTo(Bet::class, 'bet_id');
    }

    public function gameResult()
    {
        return $this->belongsTo(GameResult::class, 'game_result_id');
    }
}
