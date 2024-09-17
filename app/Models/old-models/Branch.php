<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Branch
 * 
 * @property int $idbranch
 * @property string $brnname
 * @property Carbon $brnborndate
 * @property int $brn_compid
 * @property string $brn_e
 * @property string $brn_email
 * @property string $brn_tel
 * @property string $brn_logo
 * 
 * @property Company $company
 * @property Collection|BranchAddress[] $branch_addresses
 * @property Collection|Unit[] $units
 *
 * @package App\Models
 */
class Branch extends Model
{
	protected $table = 'branch';
	protected $primaryKey = 'idbranch';
	public $timestamps = false;

	protected $casts = [
		'brnborndate' => 'datetime',
		'brn_compid' => 'int'
	];

	protected $fillable = [
		'brnname',
		'brnborndate',
		'brn_compid',
		'brn_e',
		'brn_email',
		'brn_tel',
		'brn_logo'
	];

	public function company()
	{
		return $this->belongsTo(Company::class, 'brn_compid');
	}

	public function branch_addresses()
	{
		return $this->hasMany(BranchAddress::class, 'ba_brnid');
	}

	public function units()
	{
		return $this->hasMany(Unit::class, 'unit_idbranch');
	}
}
