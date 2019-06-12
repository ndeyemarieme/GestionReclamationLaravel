<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 11 Jun 2019 11:09:36 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Module
 * 
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property string $libModule
 * @property int $classe
 * 
 * @property \Illuminate\Database\Eloquent\Collection $matieres
 *
 * @package App\Models
 */
class Module extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'module';

	protected $casts = [
		'classe' => 'int'
	];

	protected $fillable = [
		'libModule',
		'classe'
	];

	public function classe()
	{
		return $this->belongsTo(\App\Models\Classe::class, 'classe');
	}

	public function matieres()
	{
		return $this->hasMany(\App\Models\Matiere::class, 'module');
	}
}
