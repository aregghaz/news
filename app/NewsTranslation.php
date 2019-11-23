<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'title', 'description', 'lang_id', 'news_id',
    ];

    public function Lang()
    {
        return $this->hasOne('App\lang','id','lang_id');
    }
    public function News()
    {
        return $this->hasOne('App\News','id','news_id');
    }
}
