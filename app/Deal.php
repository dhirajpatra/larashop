<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    protected $fillable = [
        'url',
        'title',
        'description',
        'percent',
    ];
}