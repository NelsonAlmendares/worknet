<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AfTipoBienContable
 * 
 * @property int $id_tb_contable
 * @property string $tbc_codigo_contable
 * @property string $tbc_desc
 * @property string $tbc_e
 * 
 * @property Collection|AfActivo[] $af_activos
 *
 * @package App\Models
 */
class AfTipoBienContable extends Model
{
	protected $table = 'af_tipo_bien_contable';
	protected $primaryKey = 'id_tb_contable';
	public $timestamps = false;

	protected $fillable = [
		'tbc_codigo_contable',
		'tbc_desc',
		'tbc_e'
	];

	public function af_activos()
	{
		return $this->hasMany(AfActivo::class, 'a_id_tb_contable');
	}
}
