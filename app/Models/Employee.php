<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 * 
 * @property int $idemployee
 * @property string $empfname
 * @property string $empsname
 * @property string $emptname
 * @property string $empfsurname
 * @property string $empssurname
 * @property string $emptsurname
 * @property string $empmname
 * @property string $empdui
 * @property string $empnit
 * @property Carbon $empborndate
 * @property string $empemail
 * @property string $empcell
 * @property string $empoftel
 * @property string $empecontactname
 * @property string $empecontactcel
 * @property string $empcontactkin
 * @property string $empbgender
 * @property string $empfullname
 * @property string $empfullnameb
 * @property int $emp_idposition
 * @property string $emp_e
 * 
 * @property Position $position
 * @property Collection|AfActivo[] $af_activos
 * @property Collection|EmpAddress[] $emp_addresses
 * @property Collection|SolicitudLog[] $solicitud_logs
 * @property Unit $unit
 * @property User $user
 *
 * @package App\Models
 */
class Employee extends Model
{
	protected $table = 'employee';
	protected $primaryKey = 'idemployee';
	public $timestamps = false;

	protected $casts = [
		'empborndate' => 'datetime',
		'emp_idposition' => 'int'
	];

	protected $fillable = [
		'empfname',
		'empsname',
		'emptname',
		'empfsurname',
		'empssurname',
		'emptsurname',
		'empmname',
		'empdui',
		'empnit',
		'empborndate',
		'empemail',
		'empcell',
		'empoftel',
		'empecontactname',
		'empecontactcel',
		'empcontactkin',
		'empbgender',
		'empfullname',
		'empfullnameb',
		'emp_idposition',
		'emp_e'
	];

	public function position()
	{
		return $this->belongsTo(Position::class, 'emp_idposition');
	}

	public function af_activos()
	{
		return $this->hasMany(AfActivo::class, 'a_responsable_id_emp');
	}

	public function emp_addresses()
	{
		return $this->hasMany(EmpAddress::class, 'ea_empid');
	}

	public function solicitud_logs()
	{
		return $this->hasMany(SolicitudLog::class, 'slog_id_emp');
	}

	public function unit()
	{
		return $this->hasOne(Unit::class, 'unitmanager_idemp');
	}

	public function user()
	{
		return $this->hasOne(User::class, 'user_idemp');
	}
}
