<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RolMenu
 * 
 * @property int $idrolmenu
 * @property int $rolmenu_idrol
 * @property int $rolmenu_idmenu
 * 
 * @property Menu $menu
 * @property Rol $rol
 *
 * @package App\Models
 */
class RolMenu extends Model
{
	protected $table = 'rol_menu';
	protected $primaryKey = 'idrolmenu';
	public $timestamps = false;

	protected $casts = [
		'rolmenu_idrol' => 'int',
		'rolmenu_idmenu' => 'int'
	];

	protected $fillable = [
		'rolmenu_idrol',
		'rolmenu_idmenu'
	];

	public function menu()
	{
		return $this->belongsTo(Menu::class, 'rolmenu_idmenu');
	}

	public function rol()
	{
		return $this->belongsTo(Rol::class, 'rolmenu_idrol');
	}
}
