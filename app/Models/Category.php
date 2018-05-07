<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected  $table='categorys';
    protected $guarded=[];
    public $timestamps=false;

    public function getCreatedAtAttribute($value)
    {
        return date('Y-m-d H:i',strtotime($value));
    }
}
