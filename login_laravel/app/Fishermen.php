<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fishermen extends Model
{
    public function getDate() {
        return $this->id .': '. $this->name .'  '. $this->fish .'  '. $this->date;
    }
}
