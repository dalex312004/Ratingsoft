<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoIdentificacion extends Model
{
    use HasFactory;

    protected $table = 'tipoIdentificacion';

    static $rules = [
		'codigo' => 'required',
        'detalle' => 'required',
    ];

    protected $perPage = 20;

    protected $fillable = [
      'codigo',
      'detalle',
    ];

}
