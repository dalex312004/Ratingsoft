<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    
    static $rules = [
		  'nombreAsignatura' => 'required',
		  'codigo' => 'required',
      'descripcion' => 'required',
      'idTipoAsignatura' => 'required',
      'profesorEncargado' => 'required',
    ];

    protected $perPage = 20;
    
    protected $fillable = [
      'nombreAsignatura',
      'codigo',
      'descripcion',
      'idTipoAsignatura',
      'profesorEncargado',
    ];

    public function tipoAsignatura()
    {
        return $this->belongsTo(TipoAsignatura::class, 'idTipoAsignatura');
    }

}
