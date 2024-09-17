<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmpAddress
 * 
 * @property int $idemp_address
 * @property int $ea_idcontry
 * @property int $ea_idmunicip
 * @property int $ea_iddisctrict
 * @property string $eacomplement
 * @property int $ea_empid
 * @property string $ea_e
 * 
 * @property Contry $contry
 * @property Employee $employee
 * @property Municip $municip
 *
 * @package App\Models
 */
class EmpAddress extends Model
{
	protected $table = 'emp_address';
	protected $primaryKey = 'idemp_address';
	public $timestamps = false;

	protected $casts = [
		'ea_idcontry' => 'int',
		'ea_idmunicip' => 'int',
		'ea_iddisctrict' => 'int',
		'ea_empid' => 'int'
	];

	protected $fillable = [
		'ea_idcontry',
		'ea_idmunicip',
		'ea_iddisctrict',
		'eacomplement',
		'ea_empid',
		'ea_e'
	];

	public function contry()
	{
		return $this->belongsTo(Contry::class, 'ea_idcontry');
	}

	public function employee()
	{
		return $this->belongsTo(Employee::class, 'ea_empid');
	}

	public function municip()
	{
		return $this->belongsTo(Municip::class, 'ea_idmunicip');
	}
}
