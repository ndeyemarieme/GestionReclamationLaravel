<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 11 Jun 2019 11:09:36 +0000.
 */

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;
use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Etudiant
 * 
 * @property int $id
 * @property string $nom
 * @property string $prenom
 * @property string $mail
 * @property \Carbon\Carbon $datenaiss
 * @property string $matricule
 * @property string $pw
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property int $classe
 * 
 * @property \Illuminate\Database\Eloquent\Collection $reclamations
 *
 * @package App\Models
 */
class Etudiant extends Eloquent implements Authenticatable
{
    use BasicAuthenticatable;
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'etudiant';

	protected $casts = [
		'classe' => 'int'
	];

	protected $dates = [
		'datenaiss'
	];

	protected $fillable = [
		'nom',
		'prenom',
		'mail',
		'datenaiss',
		'matricule',
		'pw',
		'classe'
	];
    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->pw;
    }

    public function classes()
	{
		return $this->belongsTo(\App\Models\Classe::class, 'classe');
	}

	public function reclamations()
	{
		return $this->hasMany(\App\Models\Reclamation::class, 'etudiant');
	}


    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        return '';
    }


}
