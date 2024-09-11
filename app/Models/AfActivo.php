<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AfActivo
 * 
 * @property int $id_activo
 * @property string $a_cod_activo_interno_ant
 * @property string $a_codigo_activo
 * @property int $a_id_tb_contable
 * @property int $a_id_f_financiera
 * @property int $a_responsable_id_emp
 * @property string $a_nombre
 * @property string $a_desc
 * @property string $a_tipo
 * @property string $a_color
 * @property string $a_marca
 * @property string $a_modelo
 * @property string $a_n_serie
 * @property float $a_valor_dolar
 * @property float $a_valor_colon
 * @property Carbon $a_fecha_ingreso
 * @property Carbon $a_fecha_compra
 * @property string $a_fac_respaldo
 * @property string $a_acta_recepcion
 * @property string $a_ubicacion_desc
 * @property string $a_ubicacion_nivel
 * @property string $a_uso_estado
 * @property string $a_estado
 * @property string $a_e
 * @property int $a_vidautil
 * 
 * @property AfTipoBienContable $af_tipo_bien_contable
 * @property Employee $employee
 * @property AfFuenteFinanciera $af_fuente_financiera
 * @property AfDVidaUtil $af_d_vida_util
 * @property Collection|AfDepreciacion[] $af_depreciacions
 * @property Collection|AfLog[] $af_logs
 * @property Collection|SolicitudLog[] $solicitud_logs
 *
 * @package App\Models
 */
class AfActivo extends Model
{
	protected $table = 'af_activo';
	protected $primaryKey = 'id_activo';
	public $timestamps = false;

	protected $casts = [
		'a_id_tb_contable' => 'int',
		'a_id_f_financiera' => 'int',
		'a_responsable_id_emp' => 'int',
		'a_valor_dolar' => 'float',
		'a_valor_colon' => 'float',
		'a_fecha_ingreso' => 'datetime',
		'a_fecha_compra' => 'datetime',
		'a_vidautil' => 'int'
	];

	protected $fillable = [
		'a_cod_activo_interno_ant',
		'a_codigo_activo',
		'a_id_tb_contable',
		'a_id_f_financiera',
		'a_responsable_id_emp',
		'a_nombre',
		'a_desc',
		'a_tipo',
		'a_color',
		'a_marca',
		'a_modelo',
		'a_n_serie',
		'a_valor_dolar',
		'a_valor_colon',
		'a_fecha_ingreso',
		'a_fecha_compra',
		'a_fac_respaldo',
		'a_acta_recepcion',
		'a_ubicacion_desc',
		'a_ubicacion_nivel',
		'a_uso_estado',
		'a_estado',
		'a_e',
		'a_vidautil'
	];

	public function af_tipo_bien_contable()
	{
		return $this->belongsTo(AfTipoBienContable::class, 'a_id_tb_contable');
	}

	public function employee()
	{
		return $this->belongsTo(Employee::class, 'a_responsable_id_emp');
	}

	public function af_fuente_financiera()
	{
		return $this->belongsTo(AfFuenteFinanciera::class, 'a_id_f_financiera');
	}

	public function af_d_vida_util()
	{
		return $this->belongsTo(AfDVidaUtil::class, 'a_vidautil');
	}

	public function af_depreciacions()
	{
		return $this->hasMany(AfDepreciacion::class, 'afd_activo');
	}

	public function af_logs()
	{
		return $this->hasMany(AfLog::class, 'aflog_idaf');
	}

	public function solicitud_logs()
	{
		return $this->hasMany(SolicitudLog::class, 'slog_cod_af');
	}
}
