<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lang extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

}
