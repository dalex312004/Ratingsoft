<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipconvenio
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 *
 * @property Convenio[] $convenios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tipconvenio extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function convenios()
    {
        return $this->hasMany('App\Models\Convenio', 'tipconvenios_id', 'id');
    }
    

}
