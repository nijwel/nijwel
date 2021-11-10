<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recommend extends Model
{
    protected $fillable = [
        'name', 'designation', 'details'
    ];
}
