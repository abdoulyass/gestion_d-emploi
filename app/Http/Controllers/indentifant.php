<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class indentifant extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;

        if ($role == 1) {
            return view('dashboard');// Remplacez 'dashboard.admin' par le nom complet de la vue pour l'administrateur
        } elseif ($role == 2 || $role == 3) {
            return view('admin'); // Remplacez 'user' par le nom complet de la vue pour l'utilisateur
        }
    }
}
