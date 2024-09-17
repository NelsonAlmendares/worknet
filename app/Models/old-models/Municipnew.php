<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Municipnew
 * 
 * @property int $idmunicipnew
 * @property string $munipnewname
 * @property string $munipnew_e
 * @property string $munipnew_idmh
 * @property int $munipnew_iddept
 * 
 * @property Department $department
 * @property Collection|District[] $districts
 *
 * @package App\Models
 */
class Municipnew extends Model
{
	protected $table = 'municipnew';
	protected $primaryKey = 'idmunicipnew';
	public $timestamps = false;

	protected $casts = [
		'munipnew_iddept' => 'int'
	];

	protected $fillable = [
		'munipnewname',
		'munipnew_e',
		'munipnew_idmh',
		'munipnew_iddept'
	];

	public function department()
	{
		return $this->belongsTo(Department::class, 'munipnew_iddept');
	}

	public function districts()
	{
		return $this->hasMany(District::class, 'dist_idmunicipnew');
	}
}
