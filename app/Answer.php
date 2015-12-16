<?php

namespace Howoldishill;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //
    public function question() {
       # Book belongs to Author
       # Define an inverse one-to-many relationship.
       return $this->belongsTo('\Howoldishill\Question');
    }

    public function game_answer() {
        # Author has many Books
        # Define a one-to-many relationship.
        return $this->hasMany('\Howoldishill\Game_Answer');
    }
}
