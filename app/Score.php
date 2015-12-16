<?php

namespace Howoldishill;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    //
    public function game() {
       # Book belongs to Author
       # Define an inverse one-to-many relationship.
       return $this->belongsTo('\Howoldishill\Game');
    }
}
