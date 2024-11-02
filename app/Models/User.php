<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'user'; // Nombre de la tabla

    /**
     * Los atributos asignables en masa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_name',
        'user_password',
        'user_idemp',
        'user_e',
    ];

    /**
     * Los atributos que deben estar ocultos para la serialización.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'user_password',
        'remember_token',
    ];

    /**
     * Los atributos que deben ser convertidos a tipos nativos.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'user_idemp' => 'integer',
        'user_e' => 'string',
    ];

    /**
     * Método para especificar el atributo de contraseña.
     *
     * @param string $password
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['user_password'] = bcrypt($password);
    }

    /**
     * Sobrescribimos la función getAuthPassword para usar user_password como campo de contraseña.
     */
    public function getAuthPassword()
    {
        return $this->user_password;
    }
}
