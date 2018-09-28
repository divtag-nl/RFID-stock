<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'tag'
    ];
}
