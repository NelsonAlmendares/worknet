<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Rol
 * 
 * @property int $idrol
 * @property string $rolname
 * @property string $roldesc
 * @property string $rol_e
 * 
 * @property Collection|Menu[] $menus
 * @property Collection|Modul[] $moduls
 * @property Collection|Report[] $reports
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Rol extends Model
{
	protected $table = 'rol';
	protected $primaryKey = 'idrol';
	public $timestamps = false;

	protected $fillable = [
		'rolname',
		'roldesc',
		'rol_e'
	];

	public function menus()
	{
		return $this->belongsToMany(Menu::class, 'rol_menu', 'rolmenu_idrol', 'rolmenu_idmenu')
					->withPivot('idrolmenu');
	}

	public function moduls()
	{
		return $this->belongsToMany(Modul::class, 'rol_modul', 'rolmodul_idrol', 'rolmodul_idmodul')
					->withPivot('idrolmodul');
	}

	public function reports()
	{
		return $this->belongsToMany(Report::class, 'rol_report', 'rolreport_idrol', 'rolreport_idreport')
					->withPivot('idrolreport');
	}

	public function users()
	{
		return $this->belongsToMany(User::class, 'user_rol', 'ur_idrol', 'ur_iduser')
					->withPivot('id_ur', 'ur_e');
	}
}
