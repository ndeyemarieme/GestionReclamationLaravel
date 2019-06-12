<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 11 Jun 2019 11:09:36 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Classe
 * 
 * @property int $id
 * @property string $libClasse
 * @property int $filiere
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $etudiants
 * @property \Illuminate\Database\Eloquent\Collection $modules
 *
 * @package App\Models
 */
class Classe extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'classe';

	protected $casts = [
		'filiere' => 'int'
	];

	protected $fillable = [
		'libClasse',
		'filiere'
	];

	public function filiere()
	{
		return $this->belongsTo(\App\Models\Filiere::class, 'filiere');
	}

	public function etudiants()
	{
		return $this->hasMany(\App\Models\Etudiant::class, 'classe');
	}

	public function modules()
	{
		return $this->hasMany(\App\Models\Module::class, 'classe');
	}
}
