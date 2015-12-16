<?php

namespace Howoldishill;

use Illuminate\Database\Eloquent\Model;

class GamesAnswer extends Model
{
    //
    public function question() {
       # Book belongs to Author
       # Define an inverse one-to-many relationship.
       return $this->belongsTo('\Howoldishill\Question');
    }
    public function game() {
       # Book belongs to Author
       # Define an inverse one-to-many relationship.
       return $this->belongsTo('\Howoldishill\Game');
    }
    public function answer() {
       # Book belongs to Author
       # Define an inverse one-to-many relationship.
       return $this->belongsTo('\Howoldishill\Answer');
    }
}
