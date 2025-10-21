<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendario extends Model
{
    use HasFactory;

    protected $fillable = [
        'salas',
        'edificios',
        'hora_reserva',
        'serial',
        'user_id',
        'slug'
    ];

}
