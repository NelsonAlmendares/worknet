<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AfLog
 * 
 * @property int $aflog_id
 * @property Carbon $aflog_date
 * @property string $aflog_ip
 * @property int $aflog_iduser
 * @property string $aflog_action
 * @property string $aflog_desc
 * @property int $aflog_idaf
 * 
 * @property AfActivo $af_activo
 * @property User $user
 *
 * @package App\Models
 */
class AfLog extends Model
{
	protected $table = 'af_log';
	protected $primaryKey = 'aflog_id';
	public $timestamps = false;

	protected $casts = [
		'aflog_date' => 'datetime',
		'aflog_iduser' => 'int',
		'aflog_idaf' => 'int'
	];

	protected $fillable = [
		'aflog_date',
		'aflog_ip',
		'aflog_iduser',
		'aflog_action',
		'aflog_desc',
		'aflog_idaf'
	];

	public function af_activo()
	{
		return $this->belongsTo(AfActivo::class, 'aflog_idaf');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'aflog_iduser');
	}
}
