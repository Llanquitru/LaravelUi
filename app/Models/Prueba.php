<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'correo',
        'contrasena',
        'user_id'
    ];

    public function setContrasenaAttribute($value)
{
    $this->attributes['contrasena'] = bcrypt($value);
}

public function getContrasenaAttribute($value){
    $this->attributes['contrasena'] = bcrypt($value);
}

 public function user(){

    return $this->belongsTo(User::class);
 }





}
