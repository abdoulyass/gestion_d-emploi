<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;


class Exelcontroller extends Controller
{
    //
    public function export() 
    {
        $filename = 'users_with_emails.xlsx';

        // Télécharger le fichier Excel en utilisant la classe d'exportation
        return Excel::download(new UsersExport(), $filename);
    }

}
