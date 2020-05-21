<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fish extends Model
{
    public function getDate() {
        return $this->id .': '. $this->name .'  '. $this->fish .'  '. $this->date;
    }
}
