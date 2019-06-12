<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 11 Jun 2019 11:09:36 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Filiere
 * 
 * @property int $id
 * @property string $libFiliere
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $classes
 *
 * @package App\Models
 */
class Filiere extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'filiere';

	protected $fillable = [
		'libFiliere'
	];

	public function classes()
	{
		return $this->hasMany(\App\Models\Classe::class, 'filiere');
	}
}
