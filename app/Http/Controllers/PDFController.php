<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use App\Models\Dept;
use App\Models\User;
use App\Models\Cv;
use Smalot\PdfParser\Parser;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use PDF;
use App\Models\Link;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class PDFController extends Controller
{
    public function sendposte(Request $request)
    {
        if ($request->has('poste')) {
            $validator = $request->validate([
                'poste' => 'string|max:255',
                'experience_min' => 'numeric',
                'experience_max' => 'numeric',
                'niveaux' => 'string',
                'description' => 'string',
                'departement' => 'string',
                'typedecontract' => 'string', // Add allowed values
            ]);
    
            $departement = Dept::firstOrCreate(['deptName' => $request->input('departement')]);
       
            Offre::create([
                'poste' => $request->input('poste'),
                'dept_id' => $departement->id,
                'experience_min' => $request->input('experience_min'),
                'experience_max' => $request->input('experience_max'),
                'niveau_etude' => $request->input('niveaux'),
                'fonction' => $request->input('description'),
                'type_contrat' => $request->input('typedecontract'),
                

            ]);

            
        } else {
            
    
            if ($request->hasFile('cv')) {

                
                $request->validate([
                    'cv' => 'required|mimes:docx,pdf|max:2048',
                ], [
                    'cv.mimes' => 'Le fichier doit être au format docx ou pdf.',
                ]);
                $existingCV = CV::where('user_id', Auth::id())->exists();
              $user = Auth::user();
    
            if ($existingCV) {
                Session::flash('message', 'Vous avez déjà soumis un CV. Vous ne pouvez en soumettre qu\'un seul.');
                Session::flash('alert-class', 'alert-danger');
                return redirect()->back();
            }
                $fileExtension = $request->file('cv')->getClientOriginalExtension();
                $pythonExecutable = 'C:\\Users\\yassir\\AppData\\Local\\Programs\\Python\\Python312\\python.exe';
                if ($fileExtension === 'pdf') {
                    $pythonScript = 'C:\\Users\\yassir\\Desktop\\python.py';
                } elseif ($fileExtension === 'docx') {
                    $pythonScript = 'C:\\Users\\yassir\\Desktop\\readdocx.py';
                }else{
                    Session::flash('message', 'Vous dever importer une extention valable.');
                    Session::flash('alert-class', 'alert-danger');
                    return redirect()->back();
                }
                
                $cvPath = $request->file('cv')->getRealPath();
                $command = "$pythonExecutable $pythonScript $cvPath";
                
                $output = shell_exec($command);
                
                preg_match_all('/Le lien (https?:\/\/\S+) provient du site (\w+)\./', $output, $matches, PREG_SET_ORDER);
                $linksAndWebsites = [];
                
                foreach ($matches as $match) {
                    $linksAndWebsites[] = [
                        'link' => $match[1],
                        'website' => $match[2],
                    ];
                }
            
                CV::create([
                    'description' => $output,
                    'user_id' => Auth::id(),
                    'title' => 'tst'
                ]);
                
                $cvId = $user->cv->id;
                foreach ($matches as $match) {
                    Link::create([
                        'link_content' => $match[1],
                        'link_domaine' => $match[2],
                        'cv_id' => $cvId,
                    ]);
                }
    
                Session::flash('message', 'Upload du CV réussi.');
                Session::flash('alert-class', 'alert-success');
            } else {
                Session::flash('message', 'Aucun fichier n\'a été téléchargé.');
                Session::flash('alert-class', 'alert-danger');
            }
    
            return redirect()->back();
        }
    }
}
