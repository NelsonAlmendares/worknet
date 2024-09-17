<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RolReport
 * 
 * @property int $idrolreport
 * @property int $rolreport_idrol
 * @property int $rolreport_idreport
 * 
 * @property Report $report
 * @property Rol $rol
 *
 * @package App\Models
 */
class RolReport extends Model
{
	protected $table = 'rol_report';
	protected $primaryKey = 'idrolreport';
	public $timestamps = false;

	protected $casts = [
		'rolreport_idrol' => 'int',
		'rolreport_idreport' => 'int'
	];

	protected $fillable = [
		'rolreport_idrol',
		'rolreport_idreport'
	];

	public function report()
	{
		return $this->belongsTo(Report::class, 'rolreport_idreport');
	}

	public function rol()
	{
		return $this->belongsTo(Rol::class, 'rolreport_idrol');
	}
}
