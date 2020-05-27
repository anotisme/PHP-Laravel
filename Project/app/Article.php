<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table = 'articles';

    public function Category()
    {
        return $this->belongsTo('App\ArticlesCategory', 'articles_category', 'name');
    }
}
