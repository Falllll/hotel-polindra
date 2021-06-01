<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }

    public function detail_reservasi (){
        return $this->hasMany('App\Models\DetailReservasi','reservasi_id','id');
    }
}
