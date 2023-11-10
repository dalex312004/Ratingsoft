<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'idPersona'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


  
    public function adminlte_image(){
        return asset('storage/Avatar/'.Auth::user()->Avatar).'?v=' .time();
    }


    public function adminlte_desc()
    {
        $roles = $this->getRoleNames()->implode(', ');
        return $roles;
    }

    public function adminlte_profile_url()
    {
        return asset('/Miperfil');
    }
    

    // public function roles()
    // {
    //     return $this->hasMany(Role::class);
    // }


    public function persona(){
        return $this->belongsTo(Persona::class, 'id');
    }    
}
