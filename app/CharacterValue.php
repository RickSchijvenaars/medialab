<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CharacterValue extends Model
{
    protected $fillable = [
        'expression_id', 'value'
    ];

    public function expression(){
        return $this->belongsTo('App\CharacterExpression');
    }
}
