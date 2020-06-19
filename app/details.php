<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class details extends Model
{
    //
    protected $table='details';
    public $timestamps =false;

    public function booking(){
        return $this->belongsTo(booking::class,'user_id','user_id');
    }
}
