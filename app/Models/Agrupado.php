<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agrupado extends Model
{
    use HasFactory;

    protected $fillable = [
        'departamento',
        'edificio',
        'slug',
        'insumo_id',
        'teclado_id',
        'funcionario_id',
        'gabinete_id',
        'mause_id',
        'pantalla_id',
        'parlante_id'
    ];

    public function teclados(){
        return $this->belongsTo(Teclado::class,'teclado_id');
    }

public function parlantes(){
     
    return $this->belongsTo(Parlante::class,'parlante_id');
}

    public function mauses(){
        return $this->belongsTo(Mause::class,'mause_id');
    }

    public function gabinetes(){
        return $this->belongsTo(Gabinete::class,'gabinete_id');
    }

    public function funcionarios(){
        return $this->belongsTo(Funcionario::class,'funcionario_id');
    }

    public function insumos(){
        return $this->belongsTo(Insumo::class,'insumo_id');
    }


    public function pantallas(){
        return $this->belongsTo(Pantalla::class,'pantalla_id');
    }
}
