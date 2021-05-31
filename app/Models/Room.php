<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $table = "rooms";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'gambar_1',
        'gambar_2',
        'gambar_3',
        'gambar_4',
        'room_type',
        'stok',
        'price',
        'desc'
    ];
}
