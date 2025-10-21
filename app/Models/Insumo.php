<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    use HasFactory;

    protected $fillable = [
        'cables',
        'estado',
        'marca',
        'serial',
        'user_id',
        'slug'
    ];

  
    public function agrupado(){
        return $this->hasOne(Agrupado::class);
    }
    public function user(){

        return $this->belongsTo(User::class);
     }
     


    public function getRouteKeyName(){

        return 'slug';
     }


    

}
