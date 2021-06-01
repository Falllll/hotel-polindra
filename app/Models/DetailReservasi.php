<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailReservasi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function room(){
        return $this->belongsTo('App\Models\Room','kamar_id','id');
    }

    public function reservation(){
        return $this->belongsTo('App\Models\Reservation','reservasi_id','id');
    }
}
