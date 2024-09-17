<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Menu
 * 
 * @property int $idmenu
 * @property int $menu_idmodul
 * @property string $menuname
 * @property string $menudesc
 * @property string $menuroute
 * @property string $menufolder
 * @property string $menu_e
 * 
 * @property Modul $modul
 * @property Collection|Rol[] $rols
 * @property Collection|Syslog[] $syslogs
 *
 * @package App\Models
 */
class Menu extends Model
{
	protected $table = 'menu';
	protected $primaryKey = 'idmenu';
	public $timestamps = false;

	protected $casts = [
		'menu_idmodul' => 'int'
	];

	protected $fillable = [
		'menu_idmodul',
		'menuname',
		'menudesc',
		'menuroute',
		'menufolder',
		'menu_e'
	];

	public function modul()
	{
		return $this->belongsTo(Modul::class, 'menu_idmodul');
	}

	public function rols()
	{
		return $this->belongsToMany(Rol::class, 'rol_menu', 'rolmenu_idmenu', 'rolmenu_idrol')
					->withPivot('idrolmenu');
	}

	public function syslogs()
	{
		return $this->hasMany(Syslog::class, 'slog_idmenu');
	}
}
