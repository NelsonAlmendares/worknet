<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Municip
 * 
 * @property int $idmunicip
 * @property string $munipname
 * @property string $munip_e
 * @property string $munip_idmh
 * @property int $munip_iddistrict
 * @property int $munip_iddepartment
 * 
 * @property Department $department
 * @property District $district
 * @property BranchAddress $branch_address
 * @property EmpAddress $emp_address
 *
 * @package App\Models
 */
class Municip extends Model
{
	protected $table = 'municip';
	protected $primaryKey = 'idmunicip';
	public $timestamps = false;

	protected $casts = [
		'munip_iddistrict' => 'int',
		'munip_iddepartment' => 'int'
	];

	protected $fillable = [
		'munipname',
		'munip_e',
		'munip_idmh',
		'munip_iddistrict',
		'munip_iddepartment'
	];

	public function department()
	{
		return $this->belongsTo(Department::class, 'munip_iddepartment');
	}

	public function district()
	{
		return $this->belongsTo(District::class, 'munip_iddistrict');
	}

	public function branch_address()
	{
		return $this->hasOne(BranchAddress::class, 'ba_idmunicip');
	}

	public function emp_address()
	{
		return $this->hasOne(EmpAddress::class, 'ea_idmunicip');
	}
}
