<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $iduser
 * @property string $user_name
 * @property string $user_password
 * @property int $user_idemp
 * @property string $user_e
 * 
 * @property Employee $employee
 * @property Collection|AfLog[] $af_logs
 * @property Collection|Syslog[] $syslogs
 * @property Collection|Rol[] $rols
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'user';
	protected $primaryKey = 'iduser';
	public $timestamps = false;

	protected $casts = [
		'user_idemp' => 'int'
	];

	protected $hidden = [
		'user_password'
	];

	protected $fillable = [
		'user_name',
		'user_password',
		'user_idemp',
		'user_e'
	];

	public function employee()
	{
		return $this->belongsTo(Employee::class, 'user_idemp');
	}

	public function af_logs()
	{
		return $this->hasMany(AfLog::class, 'aflog_iduser');
	}

	public function syslogs()
	{
		return $this->hasMany(Syslog::class, 'slog_iduser');
	}

	public function rols()
	{
		return $this->belongsToMany(Rol::class, 'user_rol', 'ur_iduser', 'ur_idrol')
					->withPivot('id_ur', 'ur_e');
	}
}
