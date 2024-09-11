<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SolicitudLog
 * 
 * @property int $slog_id
 * @property int $slog_id_emp
 * @property string $slog_accion
 * @property int $slog_cod_af
 * @property string|null $slog_comentario
 * @property string $slog_codigo_af
 * 
 * @property AfActivo $af_activo
 * @property Employee $employee
 *
 * @package App\Models
 */
class SolicitudLog extends Model
{
	protected $table = 'solicitud_log';
	protected $primaryKey = 'slog_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'slog_id' => 'int',
		'slog_id_emp' => 'int',
		'slog_cod_af' => 'int'
	];

	protected $fillable = [
		'slog_id_emp',
		'slog_accion',
		'slog_cod_af',
		'slog_comentario',
		'slog_codigo_af'
	];

	public function af_activo()
	{
		return $this->belongsTo(AfActivo::class, 'slog_cod_af');
	}

	public function employee()
	{
		return $this->belongsTo(Employee::class, 'slog_id_emp');
	}
}
