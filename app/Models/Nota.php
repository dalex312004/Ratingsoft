<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;
    protected $table = 'nota';
    protected $perPage = 20;
    protected $fillable = [
        'fecha',
        'detalle',
        'descripcion',
        'valor',
        'idPersona',
        'idPeriodo'
    ];

    static $rules = [
        'fecha' => 'required',
        'detalle' => 'required',
        'descripcion' => 'required',
        'valor' =>'required',
        'idPersona' =>'required',
        'idPeriodo' => 'required',
    ];

    public function persona(){
        return $this->belongsTo(Persona::class, 'idPersona', 'id');
    }
    
    public function periodo(){
        return $this->belongsTo(Periodo::class, 'idPeriodo');
    }
}
