<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Report
 * 
 * @property int $idreport
 * @property string $reptname
 * @property string $rept_desc
 * @property string $reptroute
 * @property string $reptfolder
 * @property int $rept_modul
 * @property string $report_e
 * 
 * @property Modul $modul
 * @property Collection|Rol[] $rols
 *
 * @package App\Models
 */
class Report extends Model
{
	protected $table = 'report';
	protected $primaryKey = 'idreport';
	public $timestamps = false;

	protected $casts = [
		'rept_modul' => 'int'
	];

	protected $fillable = [
		'reptname',
		'rept_desc',
		'reptroute',
		'reptfolder',
		'rept_modul',
		'report_e'
	];

	public function modul()
	{
		return $this->belongsTo(Modul::class, 'rept_modul');
	}

	public function rols()
	{
		return $this->belongsToMany(Rol::class, 'rol_report', 'rolreport_idreport', 'rolreport_idrol')
					->withPivot('idrolreport');
	}
}
