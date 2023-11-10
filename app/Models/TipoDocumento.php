<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    use HasFactory;
    protected $table = 'tipoDocumento';

    static $rules = [
		'nombre' => 'required',
        'descripcion' => 'required',
    ];

    protected $perPage = 20;

    
    protected $fillable = [
      'nombre',
      'descripcion',
    ];
}
