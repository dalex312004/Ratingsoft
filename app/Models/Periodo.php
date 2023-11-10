<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    use HasFactory;

    protected $table = 'periodo';
    protected $perPague = 20;
    protected $fillable = [
        'periodo',
        'fechaInicio',
        'fechaFin'
    ];
    
    static $rules = [
        'periodo' =>'required',
        'fechaInicio' =>'required',
        'fechaFin' =>'required',
    ];

    public function notas()
    {
        return $this->hasMany(Nota::class, 'idPeriodo');
    }
}
