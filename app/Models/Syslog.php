<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Syslog
 * 
 * @property int $idsyslog
 * @property Carbon $slogdate
 * @property string $slogip
 * @property int $slog_idmodul
 * @property int $slog_idmenu
 * @property string $slogformname
 * @property int $slog_iduser
 * @property string $slogaction
 * @property string $slogdesc
 * 
 * @property Menu $menu
 * @property Modul $modul
 * @property User $user
 *
 * @package App\Models
 */
class Syslog extends Model
{
	protected $table = 'syslog';
	protected $primaryKey = 'idsyslog';
	public $timestamps = false;

	protected $casts = [
		'slogdate' => 'datetime',
		'slog_idmodul' => 'int',
		'slog_idmenu' => 'int',
		'slog_iduser' => 'int'
	];

	protected $fillable = [
		'slogdate',
		'slogip',
		'slog_idmodul',
		'slog_idmenu',
		'slogformname',
		'slog_iduser',
		'slogaction',
		'slogdesc'
	];

	public function menu()
	{
		return $this->belongsTo(Menu::class, 'slog_idmenu');
	}

	public function modul()
	{
		return $this->belongsTo(Modul::class, 'slog_idmodul');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'slog_iduser');
	}
}
