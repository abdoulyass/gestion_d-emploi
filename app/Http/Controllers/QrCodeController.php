<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QrCodeController extends Controller
{
    public function processQRCode($userId)
    {    
        $user = User::find($userId);

        if ($user) {
            $message = 'Félicitations, '.$user->name.' devient désormais membre de votre équipe.';
            $user->notify(new \App\Notifications\workrequest($message));

            return response()->json(['message' => $message]);
        } else { 
            return response()->json(['message' => 'Utilisateur non trouvé'], 404);
        }
    }

    public function qrchek($userId)
    {
        $user = User::find($userId);

        if ($user) {
            if ($user->role == 1) {
                $message = 'Félicitations, '.$user->name.' devient désormais membre de votre équipe.';
                return response()->json(['message' => $message]);
            } else {
                return response()->json(['message' => 'Utilisateur non trouvé'], 404);
            }
        } else {
            return response()->json(['message' => 'Utilisateur non trouvé'], 404);
        }
    }
}
