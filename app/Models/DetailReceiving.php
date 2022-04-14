<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailReceiving extends Model
{
    use HasFactory;

    protected $table = 'detail_receiving';

    protected $fillable = [
        'sumber',
        'idreceiving',
        'jenis',
        'harga',
        'qty',
    ];

    protected $guarded = [
        'created_at',
        'updated_at',
    ];
}
