<?php

// Dans le contrôleur PointageController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Pointage;

class PointageController extends Controller
{
    public function pointage(Request $request)
    {
        $user = $request->user();

        // Vérifier si le dernier pointage a été effectué il y a plus de 30 minutes
        $dernierPointage = Session::get('dernierPointage');

        if (!$dernierPointage || now()->diffInMinutes($dernierPointage) >= 30) {
            // Effectuer le pointage
            Pointage::create([
                'user_id' => $user->id,
                'heure_pointage' => now(),
            ]);

            // Mettre à jour l'heure du dernier pointage dans la session
            Session::put('dernierPointage', now());

            return response()->json(['message' => 'Pointage effectué avec succès.']);
        } else {
            return response()->json(['message' => 'Pointage déjà effectué récemment.'], 422);
        }
    }
}
