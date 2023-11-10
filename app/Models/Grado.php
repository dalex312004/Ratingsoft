<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    use HasFactory;

    protected $table = 'grado';
    protected $perPage = 20;
    protected $fillable = [
        'grado',
        'descripcion',
        'idCurso'
    ];

    static $rules = [
        'grado' => 'required',
        'descripcion' => 'required',
        'idCurso' =>'required'
    ];


    public function curso(){
        return $this->belongsTo(Curso::class, 'idCurso');
    }

    public function personas()
    {
        return $this->hasMany(Persona::class, 'idGrado');
    }
}
