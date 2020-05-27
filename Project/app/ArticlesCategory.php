<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticlesCategory extends Model
{
    //
    protected $table = "articles_category";

    public function Article()
    {
        return $this->hasMany('App\Article', 'articles_category', 'name');
    }
}
