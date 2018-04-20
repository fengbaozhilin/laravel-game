<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    //
    //
    protected  $table='friends';
    protected $guarded=[];
    public $timestamps=false;


    public function user()
    {
        return $this->hasOne(User::class, 'id', 'friend_id');
    }
}
