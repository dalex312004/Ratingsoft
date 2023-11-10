<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPersona extends Model
{
    use HasFactory;

    protected $table = 'tipoPersona';
    protected $perPage = 20;
    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    static $rules = [
        'nombre' =>'required',
        'descripcion' =>'required'
    ];
}
