<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 11 Jun 2019 11:09:36 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Reclamation
 * 
 * @property int $id
 * @property int $etudiant
 * @property int $matiere
 * @property float $noteObtenue
 * @property int $dateReclamation
 * @property int $objetReclamation
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 *
 * @package App\Models
 */
class Reclamation extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'reclamation';

	protected $casts = [
		'etudiant' => 'int',
		'matiere' => 'int',
		'noteObtenue' => 'float',
		'dateReclamation' => 'int',
		'objetReclamation' => 'int'
	];

	protected $fillable = [
		'etudiant',
		'matiere',
		'noteObtenue',
		'dateReclamation',
		'objetReclamation'
	];

	public function matiere()
	{
		return $this->belongsTo(\App\Models\Matiere::class, 'matiere');
	}

	public function etudiant()
	{
		return $this->belongsTo(\App\Models\Etudiant::class, 'etudiant');
	}
}
