<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CharacterValue extends Model
{
    protected $fillable = [
        'expression_id', 'value'
    ];
}
