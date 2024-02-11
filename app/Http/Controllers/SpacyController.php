<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OffresEmploi;
use App\Models\Departement;
use Illuminate\Http\Response;
use Irazasyed\LaravelNlp\Facades\Nlp;
use NlpTools\Tokenizers\WhitespaceTokenizer;
use NlpTools\Stemmers\PorterStemmer;


class SpacyController extends Controller
{
    public function runSpacyScript(request $request)
    {
        // Utilisez plutôt config pour la configuration globale
        $validator = $request->validate([
            'poste' => 'required|string|max:255',
            'experience_min' => 'required|numeric',
            'experience_max' => 'required|numeric',
            'niveaux' => 'required|string',
            'description' => 'required|string',
            'departement' => 'required|string',
            'typedecontract' => 'required|string',
            'alias' => 'file|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Handle file upload
        if ($request->hasFile('alias')) {
            $file = $request->file('alias');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $fileName);
        } else {
            // Handle the case where no file is uploaded, if needed
            $fileName = null;
        }
    
        // Assuming you have a 'Departement' model and want to associate the offer with a department
        $departement = Departement::firstOrCreate(['nom' => $request->input('departement')]);
    
        // Create a new OffresEmploi instance and populate its attributes
        $offre = OffresEmploi::create([
            'poste' => $request->input('poste'),
            'experience_min' => $request->input('experience_min'),
            'experience_max' => $request->input('experience_max'),
            'niveau_etude' => $request->input('niveaux'),
            'fonction' => $request->input('description'),
            'departement_id' => $departement->id,
            'type_contrat' => $request->input('typedecontract'),
            'aliasimg' => $fileName,
        ]);
    }
    }
