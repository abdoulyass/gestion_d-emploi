<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offre;
use App\Models\Dept;
class tsttst extends Controller
{
    function tsttst(request $request){
        $validator = $request->validate([
            'poste' => 'string|max:255',
            'experience_min' => 'numeric',
            'experience_max' => 'numeric',
            'niveaux' => 'string',
            'description' => 'string',
            'departement' => 'string',
            'typedecontract' => 'string',
            'alias' => 'file|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Handle file upload
        // if ($request->hasFile('alias')) {
        //     $file = $request->file('alias');
        //     $fileName = time() . '.' . $file->getClientOriginalExtension();
        //     $file->move(public_path('images'), $fileName);
        // } else {
        //     // Handle the case where no file is uploaded, if needed
        //     $fileName = null;
        // }
         dd($request->all());
        // Assuming you have a 'Departement' model and want to associate the offer with a department
        $departement = Dept::firstOrCreate(['nom' => $request->input('departement')]);
    
        // Create a new OffresEmploi instance and populate its attributes
        $offre =offresemploi::create([
            'poste' => $request->input('poste'),
            'experience_min' => $request->input('experience_min'),
            'experience_max' => $request->input('experience_max'),
            'niveau_etude' => $request->input('niveaux'),
            'fonction' => $request->input('description'),
            // 'departement_id' => $departement->id,
            'type_contrat' => $request->input('typedecontract'),
            // 'aliasimg' => $fileName,
            
        ]);
        
       
    }
    public function tst(){
        return view('tst2');
    }
}
