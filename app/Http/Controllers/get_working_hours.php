<?php

namespace App\Http\Controllers;
use App\Models\Pointage;
use Illuminate\Http\Request;

class get_working_hours extends Controller
{
    function getWorkingHours(){
        $pointages = Pointage::with('user')->get();
        return view('workinghors',['pointages'=>$pointages]);
    }
}
