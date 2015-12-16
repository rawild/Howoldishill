<?php

namespace Howoldishill;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //
    public function score() {
        # Author has many Books
        # Define a one-to-many relationship.
        return $this->hasOne('\Howoldishill\Score');

    }
    public function game_answer() {
        # Author has many Books
        # Define a one-to-many relationship.
        return $this->hasMany('\Howoldishill\Game_Answer');
    }
}
