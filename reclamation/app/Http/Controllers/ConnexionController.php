<?php

namespace App\Http\Controllers;


use App\Models\Etudiant;
use App\Models\Classe;

class ConnexionController extends Controller
{
    public function connecter()
    {

        $matricule = request('matricule');
        $password = request('pw');
        $test = auth()->attempt(
            [
                 'matricule' => $matricule,
                'password' => $password,
            ]
        );
        if ($test) {
            $etuSelect = Etudiant::where('matricule', $matricule)->first();
            $classes = $etuSelect->classes;
            return view('formulaireReclammation',
                [
                    'etudiant' => $etuSelect,
                    'classes' => $classes
                ]
            );
        } else {
     return redirect('/connexion');
        }

     var_dump($test);
    }



    public function inscrire(){
        $etudiant=new Etudiant();
        $etudiant->matricule='535323';
        $etudiant->nom='';
        $etudiant->prenom='Ibson';
        $etudiant->mail='Ibson@gmail.com';
        $etudiant->datenaiss='2019-05-21';
        $etudiant->pw=bcrypt('535323');
        $etudiant->classe=6;
        $etudiant->save();

    }
}

