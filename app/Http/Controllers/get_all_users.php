<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class get_all_users extends Controller
{
    function getall(){
        $users= User::all();
        return veiw('allUsers',['users'=>$users]);
    }
    
}
