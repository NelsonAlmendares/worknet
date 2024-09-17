<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // Variables para llamar datos de la tabla
    protected $table = 'user';
    protected $id = 'iduser';

    protected $fillTable = [
        'user_name', 'user_password', 'user_idemp', 'user_e',
    ];

    protected $hidden = [
        'user_password', 'remember_token',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['user_password'] = bcrypt($value);
    }
}
