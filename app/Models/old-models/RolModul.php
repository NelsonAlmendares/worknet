<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RolModul
 * 
 * @property int $idrolmodul
 * @property int $rolmodul_idrol
 * @property int $rolmodul_idmodul
 * 
 * @property Modul $modul
 * @property Rol $rol
 *
 * @package App\Models
 */
class RolModul extends Model
{
	protected $table = 'rol_modul';
	protected $primaryKey = 'idrolmodul';
	public $timestamps = false;

	protected $casts = [
		'rolmodul_idrol' => 'int',
		'rolmodul_idmodul' => 'int'
	];

	protected $fillable = [
		'rolmodul_idrol',
		'rolmodul_idmodul'
	];

	public function modul()
	{
		return $this->belongsTo(Modul::class, 'rolmodul_idmodul');
	}

	public function rol()
	{
		return $this->belongsTo(Rol::class, 'rolmodul_idrol');
	}
}
