<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contry
 * 
 * @property int $idcontry
 * @property string $contryname
 * @property string $contry_e
 * @property string $contry_idmh
 * 
 * @property BranchAddress $branch_address
 * @property EmpAddress $emp_address
 *
 * @package App\Models
 */
class Contry extends Model
{
	protected $table = 'contry';
	protected $primaryKey = 'idcontry';
	public $timestamps = false;

	protected $fillable = [
		'contryname',
		'contry_e',
		'contry_idmh'
	];

	public function branch_address()
	{
		return $this->hasOne(BranchAddress::class, 'ba_idcontry');
	}

	public function emp_address()
	{
		return $this->hasOne(EmpAddress::class, 'ea_idcontry');
	}
}
