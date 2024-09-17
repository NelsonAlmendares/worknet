<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AfDepreciacion
 * 
 * @property int $afd_id
 * @property int $afd_activo
 * @property float $afd_valor_depreciacion
 * @property int $afd_vida_util
 * @property float|null $afd_cuota_anual
 * @property float|null $afd_cuota_diaria
 * @property Carbon $afd_fecha_generacion
 * @property Carbon $afd_fecha_corte
 * @property string $afd_codigo_informe
 * @property string $afd_e
 * 
 * @property AfActivo $af_activo
 *
 * @package App\Models
 */
class AfDepreciacion extends Model
{
	protected $table = 'af_depreciacion';
	protected $primaryKey = 'afd_id';
	public $timestamps = false;

	protected $casts = [
		'afd_activo' => 'int',
		'afd_valor_depreciacion' => 'float',
		'afd_vida_util' => 'int',
		'afd_cuota_anual' => 'float',
		'afd_cuota_diaria' => 'float',
		'afd_fecha_generacion' => 'datetime',
		'afd_fecha_corte' => 'datetime'
	];

	protected $fillable = [
		'afd_activo',
		'afd_valor_depreciacion',
		'afd_vida_util',
		'afd_cuota_anual',
		'afd_cuota_diaria',
		'afd_fecha_generacion',
		'afd_fecha_corte',
		'afd_codigo_informe',
		'afd_e'
	];

	public function af_activo()
	{
		return $this->belongsTo(AfActivo::class, 'afd_activo');
	}
}
