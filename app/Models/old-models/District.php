<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class District
 * 
 * @property int $iddistrict
 * @property string $distname
 * @property string $dist_e
 * @property string $dist_idmh
 * @property int $dist_idmunicipnew
 * 
 * @property Municipnew $municipnew
 * @property Collection|Municip[] $municips
 *
 * @package App\Models
 */
class District extends Model
{
	protected $table = 'district';
	protected $primaryKey = 'iddistrict';
	public $timestamps = false;

	protected $casts = [
		'dist_idmunicipnew' => 'int'
	];

	protected $fillable = [
		'distname',
		'dist_e',
		'dist_idmh',
		'dist_idmunicipnew'
	];

	public function municipnew()
	{
		return $this->belongsTo(Municipnew::class, 'dist_idmunicipnew');
	}

	public function municips()
	{
		return $this->hasMany(Municip::class, 'munip_iddistrict');
	}
}
