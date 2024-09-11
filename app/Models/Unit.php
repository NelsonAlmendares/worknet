<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Unit
 * 
 * @property int $idunit
 * @property string $unitname
 * @property string $unitintercode
 * @property string $unitdesc
 * @property string $unitobj
 * @property string $unittel
 * @property int $unitmanager_idemp
 * @property string $unitlocation
 * @property Carbon $unitborndate
 * @property string $unitemail
 * @property string $unit_e
 * @property int $unit_idbranch
 * 
 * @property Employee $employee
 * @property Branch $branch
 * @property Position $position
 * @property Collection|Position[] $positions
 *
 * @package App\Models
 */
class Unit extends Model
{
	protected $table = 'unit';
	protected $primaryKey = 'idunit';
	public $timestamps = false;

	protected $casts = [
		'unitmanager_idemp' => 'int',
		'unitborndate' => 'datetime',
		'unit_idbranch' => 'int'
	];

	protected $fillable = [
		'unitname',
		'unitintercode',
		'unitdesc',
		'unitobj',
		'unittel',
		'unitmanager_idemp',
		'unitlocation',
		'unitborndate',
		'unitemail',
		'unit_e',
		'unit_idbranch'
	];

	public function employee()
	{
		return $this->belongsTo(Employee::class, 'unitmanager_idemp');
	}

	public function branch()
	{
		return $this->belongsTo(Branch::class, 'unit_idbranch');
	}

	public function position()
	{
		return $this->hasOne(Position::class, 'posit_idunit');
	}

	public function positions()
	{
		return $this->hasMany(Position::class, 'posit_idunitb');
	}
}
