<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Modul
 * 
 * @property int $idmodul
 * @property string $modname
 * @property string $moddesc
 * @property string $modroute
 * @property string $modfolder
 * @property string $mod_e
 * 
 * @property Menu $menu
 * @property Collection|Report[] $reports
 * @property Collection|Rol[] $rols
 * @property Collection|Syslog[] $syslogs
 *
 * @package App\Models
 */
class Modul extends Model
{
	protected $table = 'modul';
	protected $primaryKey = 'idmodul';
	public $timestamps = false;

	protected $fillable = [
		'modname',
		'moddesc',
		'modroute',
		'modfolder',
		'mod_e'
	];

	public function menu()
	{
		return $this->hasOne(Menu::class, 'menu_idmodul');
	}

	public function reports()
	{
		return $this->hasMany(Report::class, 'rept_modul');
	}

	public function rols()
	{
		return $this->belongsToMany(Rol::class, 'rol_modul', 'rolmodul_idmodul', 'rolmodul_idrol')
					->withPivot('idrolmodul');
	}

	public function syslogs()
	{
		return $this->hasMany(Syslog::class, 'slog_idmodul');
	}
}
