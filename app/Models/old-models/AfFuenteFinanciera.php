<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AfFuenteFinanciera
 * 
 * @property int $id_f_financiera
 * @property string $ff_nombre
 * @property string $ff_desc
 * @property string $ff_e
 * 
 * @property Collection|AfActivo[] $af_activos
 *
 * @package App\Models
 */
class AfFuenteFinanciera extends Model
{
	protected $table = 'af_fuente_financiera';
	protected $primaryKey = 'id_f_financiera';
	public $timestamps = false;

	protected $fillable = [
		'ff_nombre',
		'ff_desc',
		'ff_e'
	];

	public function af_activos()
	{
		return $this->hasMany(AfActivo::class, 'a_id_f_financiera');
	}
}
