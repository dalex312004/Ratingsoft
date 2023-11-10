<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoAsignatura extends Model
{
    
  protected $table = 'tipoAsignaturas';
    static $rules = [
		'nombreTipoAsignatura' => 'required',
    'descripcion' => 'required',
    ];

    protected $perPage = 20;

    
    protected $fillable = [
      'nombreTipoAsignatura',
      'descripcion',
    ];

}
