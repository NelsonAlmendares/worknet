<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Department
 * 
 * @property int $iddepartment
 * @property string $deptname
 * @property string $dept_e
 * @property string $dept_idmh
 * 
 * @property Collection|Municip[] $municips
 * @property Collection|Municipnew[] $municipnews
 *
 * @package App\Models
 */
class Department extends Model
{
	protected $table = 'department';
	protected $primaryKey = 'iddepartment';
	public $timestamps = false;

	protected $fillable = [
		'deptname',
		'dept_e',
		'dept_idmh'
	];

	public function municips()
	{
		return $this->hasMany(Municip::class, 'munip_iddepartment');
	}

	public function municipnews()
	{
		return $this->hasMany(Municipnew::class, 'munipnew_iddept');
	}
}
