<?php

namespace App\Http\Controllers\User;
use App\Models\Offre;
use App\Models\Dept;
use App\Models\User;
use App\Models\Cv;
use Smalot\PdfParser\Parser;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use PDF;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
class UserController extends Controller
{
    public function index()
    {    
        return view('user.index');
    }

    public function contact()
    {
        return view('user.contact');
    }

    public function about()
    {
        return view('user.about');
    }

    public function services()
    {
      
        return view('user.services');
    }
    public function posterCV(){
        return view('user.posterCv');
    }


    public function tst2(){
        return view('tst2');
    }


    public function welcome(){
        return view('welcome');
    }

    
    public function adm(){
        $users = User::all();
        $totalUsers = Dept::count();
        return view('admin.index',['users' => $users, 'totalUsers'=> $totalUsers]);
    }


   
    public function addoffre(){
        return view('admin.addoffre');
    }


    public function allUsers(){
        $users = User::all();
        return view('admin.allusers',['users' => $users]);
      }



      public function departements(){
         $Depts=dept::all();
        return view('admin.departement',['Depts'=>$Depts]);
      }



      public function deleteuser($id)
      {
       $user = User::findOrFail($id);
       $user->delete();
    
       return Redirect::back()->with('success', 'L\'utilisateur a été supprimé avec succès.');
      }



    // public function sendcv(Request $request)
    // {
    //     // Validation
    //     $request->validate([
    //         'cv' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048',
    //     ]);
    
    //     if ($request->file('cv')) {
    //         $file = $request->file('cv');
    //         $filename = time() . '_' . $file->getClientOriginalName();
    
    //         // File upload location
    //         $location = public_path('/cvs');
    
    //         // Upload file
    //         $file->move($location, $filename);
             
    //         Session::flash('message', 'Upload Successfully.');
    //         Session::flash('alert-class', 'alert-success');
        
    //     } else {
    //         Session::flash('message', 'File not uploaded.');
    //         Session::flash('alert-class', 'alert-danger');
    //     }
       
    //     // return redirect('/postercv')->with("modal_message_success", "aploaded by secces");;
    // }
    

     
    public function userinformation($id)
{
    // Utilisez l'ID pour récupérer l'utilisateur correspondant depuis la base de données
    $user = User::with('Cv')->find($id);

    // Vérifiez si l'utilisateur existe
    if ($user) {
        // Passer les données de l'utilisateur à la vue utilisateur et rediriger avec un message
        return view('admin.userinformation', compact('user'));
    } else {
        // Retourner une réponse avec un code d'erreur 404 si l'utilisateur n'est pas trouvé
        return response()->json(['error' => 'User not found'], 404);
    }
}   

    }
