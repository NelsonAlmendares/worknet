<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Position
 * 
 * @property int $idposition
 * @property string $positname
 * @property string $positdesc
 * @property string $positstate
 * @property string $positrequest
 * @property int $posit_idunit
 * @property int $posit_idtypeposit
 * @property string $posit_nameb
 * @property string $posit_e
 * @property int|null $posit_idunitb
 * 
 * @property TypePosition $type_position
 * @property Unit|null $unit
 * @property Employee $employee
 *
 * @package App\Models
 */
class Position extends Model
{
	protected $table = 'position';
	protected $primaryKey = 'idposition';
	public $timestamps = false;

	protected $casts = [
		'posit_idunit' => 'int',
		'posit_idtypeposit' => 'int',
		'posit_idunitb' => 'int'
	];

	protected $fillable = [
		'positname',
		'positdesc',
		'positstate',
		'positrequest',
		'posit_idunit',
		'posit_idtypeposit',
		'posit_nameb',
		'posit_e',
		'posit_idunitb'
	];

	public function type_position()
	{
		return $this->belongsTo(TypePosition::class, 'posit_idtypeposit');
	}

	public function unit()
	{
		return $this->belongsTo(Unit::class, 'posit_idunitb');
	}

	public function employee()
	{
		return $this->hasOne(Employee::class, 'emp_idposition');
	}
}
