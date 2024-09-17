<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BranchAddress
 * 
 * @property int $idbranch_address
 * @property int $ba_idcontry
 * @property int $ba_idmunicip
 * @property int $ba_iddisctrict
 * @property string $bacomplement
 * @property int $ba_brnid
 * @property string $ba_e
 * 
 * @property Contry $contry
 * @property Branch $branch
 * @property Municip $municip
 *
 * @package App\Models
 */
class BranchAddress extends Model
{
	protected $table = 'branch_address';
	protected $primaryKey = 'idbranch_address';
	public $timestamps = false;

	protected $casts = [
		'ba_idcontry' => 'int',
		'ba_idmunicip' => 'int',
		'ba_iddisctrict' => 'int',
		'ba_brnid' => 'int'
	];

	protected $fillable = [
		'ba_idcontry',
		'ba_idmunicip',
		'ba_iddisctrict',
		'bacomplement',
		'ba_brnid',
		'ba_e'
	];

	public function contry()
	{
		return $this->belongsTo(Contry::class, 'ba_idcontry');
	}

	public function branch()
	{
		return $this->belongsTo(Branch::class, 'ba_brnid');
	}

	public function municip()
	{
		return $this->belongsTo(Municip::class, 'ba_idmunicip');
	}
}
