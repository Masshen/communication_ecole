<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Ecole;
use App\Models\Eleve;
use App\Models\User;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function dashboard(){
        $eleves=Eleve::all();
        $classes=Classe::all();
        $users=User::all();
        $activities=["Gestion de l'école","Gestion des élèves","Gestion des classes","Communication aux parents"];
        return view('dashboard',compact('eleves','classes','users','activities'));
    }

    public function teachers(){
        return view('teachers');
    }

    public function pupils(){
        $eleves=Eleve::all();
        foreach ($eleves as $value) {
            $value->classe;
        }
        return view('pupils',['eleves'=>$eleves]);
    }

    public function classes(){
        $classes=Classe::all();
        return view('class',['classes'=>$classes]);
    }
}
