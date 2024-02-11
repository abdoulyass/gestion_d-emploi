<?php

namespace App\Http\Controllers;
use App\Models\Offre;
use App\Models\Dept;
use App\Models\User;
use App\Models\Employe;
use Illuminate\Http\Request;


class employer extends Controller
{

    public function createEmploye()
    {     $employe = new Employe();
        $employe->salary = 50000;
    
        // Attribution des valeurs aux attributs hérités de User
        $employe->firstName = "Prénom de l'employé";
        $employe->name = "Nom de l'employé";
        $employe->email = "email@exemple.com";
        $employe->password = bcrypt("motdepasse");
        $employe->adress = "Adresse de l'employé";
    
        $employe->user_number = "Numéro de l'employé";
        $employe->save();
    }

}
