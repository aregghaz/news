<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class News extends Model
{

    protected $fillable = [
         'slug', 'category_id',
    ];


    public function NewsTranslation()
    {
        return $this->hasOne('App\NewsTranslation');
    }
    public function Images()
    {
        return $this->hasMany('App\Images');
    }

    public function Categories()
    {
        return $this->hasOne('App\Categories','id','category_id');
    }
}
