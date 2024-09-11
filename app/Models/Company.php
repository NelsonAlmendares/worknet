<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Company
 * 
 * @property int $idcompany
 * @property string $compname
 * @property string $compdesc
 * @property string $compsr
 * @property string $compnit
 * @property string $compnrc
 * @property Carbon $compborndate
 * @property string $comp_e
 * 
 * @property Collection|Branch[] $branches
 *
 * @package App\Models
 */
class Company extends Model
{
	protected $table = 'company';
	protected $primaryKey = 'idcompany';
	public $timestamps = false;

	protected $casts = [
		'compborndate' => 'datetime'
	];

	protected $fillable = [
		'compname',
		'compdesc',
		'compsr',
		'compnit',
		'compnrc',
		'compborndate',
		'comp_e'
	];

	public function branches()
	{
		return $this->hasMany(Branch::class, 'brn_compid');
	}
}
