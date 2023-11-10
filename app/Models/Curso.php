<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Curso extends Model
{
    
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
