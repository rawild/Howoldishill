<?php

namespace Howoldishill;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    public function answers() {
        # Author has many Books
        # Define a one-to-many relationship.
        return $this->hasMany('\Howoldishill\Answer');
    }
    public function game_answer() {
        # Author has many Books
        # Define a one-to-many relationship.
        return $this->hasMany('\Howoldishill\Game_Answer');
    }
    
}
