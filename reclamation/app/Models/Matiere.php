<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 11 Jun 2019 11:09:36 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Matiere
 * 
 * @property int $id
 * @property string $libMatiere
 * @property int $module
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $reclamations
 *
 * @package App\Models
 */
class Matiere extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'matiere';

	protected $casts = [
		'module' => 'int'
	];

	protected $fillable = [
		'libMatiere',
		'module'
	];

	public function module()
	{
		return $this->belongsTo(\App\Models\Module::class, 'module');
	}

	public function reclamations()
	{
		return $this->hasMany(\App\Models\Reclamation::class, 'matiere');
	}
}
