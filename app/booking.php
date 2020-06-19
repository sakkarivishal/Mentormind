<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    //
    protected $table='booking';
    public $timestamps =false;

    protected $fillable=[
        'test_name',
        'lab_name',
        'prescription',
    ];

    public function details(){
        return $this->hasOne(details::class,'user_id','booking_id');
    }
}
