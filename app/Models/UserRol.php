<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserRol
 * 
 * @property int $id_ur
 * @property int $ur_iduser
 * @property int $ur_idrol
 * @property string $ur_e
 * 
 * @property User $user
 * @property Rol $rol
 *
 * @package App\Models
 */
class UserRol extends Model
{
	protected $table = 'user_rol';
	protected $primaryKey = 'id_ur';
	public $timestamps = false;

	protected $casts = [
		'ur_iduser' => 'int',
		'ur_idrol' => 'int'
	];

	protected $fillable = [
		'ur_iduser',
		'ur_idrol',
		'ur_e'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'ur_iduser');
	}

	public function rol()
	{
		return $this->belongsTo(Rol::class, 'ur_idrol');
	}
}
