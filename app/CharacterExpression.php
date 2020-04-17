<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CharacterExpression extends Model
{
    public $timestamps = false;

    public function characterValues() {
        return $this->hasMany('App\CharacterValue');
    }
}
