<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TypePosition
 * 
 * @property int $idtypeposit
 * @property string $typepositname
 * @property string $typepositdesc
 * @property string $typeposit_e
 * 
 * @property Position $position
 *
 * @package App\Models
 */
class TypePosition extends Model
{
	protected $table = 'type_position';
	protected $primaryKey = 'idtypeposit';
	public $timestamps = false;

	protected $fillable = [
		'typepositname',
		'typepositdesc',
		'typeposit_e'
	];

	public function position()
	{
		return $this->hasOne(Position::class, 'posit_idtypeposit');
	}
}
