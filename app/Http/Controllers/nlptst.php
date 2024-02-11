<?php

namespace App\Http\Controllers;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Illuminate\Http\Request;

class nlptst extends Controller
{
    public function extractEntities()
    {
        // Chemin vers le fichier PDF à analyser
        $pdfPath = 'C:\\xampp\\htdocs\\gestion_stock\\public\\cvs\\cv3.pdf';

        // Chemin vers l'exécutable Python
        $pythonExecutable = 'C:\\Users\\yassir\\AppData\\Local\\Programs\\Python\\Python312\\python.exe';

        // Chemin vers le script Python
        $pythonScript = 'C:\\Users\\yassir\\Desktop\\python.py';
        
        // Commande à exécuter
        $command = "$pythonExecutable $pythonScript $pdfPath";
        
        // Exécuter la commande et récupérer la sortie
        $output = shell_exec($command);
        
        // Afficher la sortie
      echo nl2br( $output);
    }
}
