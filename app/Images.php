<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name', 'news_id',
    ];
    public function News()
    {
        return $this->hasOne('App\News','id','news_id');
    }

}
