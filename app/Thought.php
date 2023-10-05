<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thought extends Model
{
    protected $fillable = [
        'name', 'content'
    ];
}
