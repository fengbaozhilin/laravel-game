<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table = 'articles';
    protected $guarded = [];


    public function getTitleAttribute($value)
    {

        return $value;

    }

    public function setTitleAttribute($value)
    {

        return $value;

    }


    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'cate_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function Comment()
    {

        return $this->hasMany(Comment::class, 'article_id', 'id');

    }


}
