<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'namatoko',
        'gas3kg',
        'gas12kg',
        'gas50kg',
        'tglkirim',
        'pembayaran',
        'status',
        'iduser',


    ];

}
