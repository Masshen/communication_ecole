<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Composer;
use App\Models\Ecole;
use App\Models\Eleve;
use App\Models\Parents;
use App\Models\Responsable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CreateController extends Controller
{
    public function classes(){
        $cycles=["primaire","secondaire"];
        $sections=[null,"scientifique","commerciales","littéraire"];
        $refrences=[null,"A","B","C","D","E"];
        return view('form.class',['cycles'=>$cycles,'sections'=>$sections,'options'=>[],'references'=>$refrences]);
    }

    public function eleves(){
        $classes=Classe::all();
        return view('form.pupil',['classes'=>$classes]);
    }

    public function create_class(Request $request){
        $validation=$request->validate([
            'promotion'=>'required|numeric',
            'section'=>'nullable',
            'cycle'=>'required'
        ]);
        $ecole=Ecole::first();
        $promo=$request->promotion;
        $section=$request->section;
        $cycle=$request->cycle;
        $ref=$request->reference;
        $classe=new Classe();
        $label="";
        if($section){
            $label="$promo année $section $cycle $ref";
        }else{
            $label="$promo année $cycle $ref";
        }
        $classe->label=$label;
        $classe->promotion=$promo;
        $classe->section=$section;
        $classe->cycle=$cycle;
        $classe->reference=$ref;
        $classe->ecole_id=$ecole->id;
        $classe->save();
        return redirect()->route('front.class');
    }

    public function create_pupil(Request $request){
        $validation=$request->validate($request->all(),[
            'classe'=>'required|exists:classes,id',
            'nom'=>'required',
            'prenom'=>'required',
            'naissance'=>'date',
            'father_nom'=>'required',
            'father_prenom'=>'required',
            'father_naissance'=>'date',
            'mother_nom'=>'required',
            'mother_prenom'=>'required',
            'mother_naissance'=>'date',
        ]);
        $mother=new Parents();
        $mother->nom=$request->mother_nom;
        $mother->prenom=$request->mother_prenom;
        $mother->naissance=$request->mother_naissance;
        $father=new Parents();
        $father->nom=$request->father_nom;
        $father->prenom=$request->father_prenom;
        $father->naissance=$request->father_naissance;
        $mother->save();
        $father->save();
        $responsable=new Responsable();
        $responsable->save();
        $compose=new Composer();
        $compose->responsable_id=$responsable->id;
        $compose->parent_id=$father->id;
        $compose->genre="papa";
        $compose->save();
        $compose=new Composer();
        $compose->responsable_id=$responsable->id;
        $compose->parent_id=$mother->id;
        $compose->genre="maman";
        $compose->save();
        $eleve=new Eleve();
        $eleve->nom=$request->nom;
        $eleve->prenom=$request->prenom;
        $eleve->naissance=$request->naissance;
        $eleve->classe_id=$request->classe;
        $eleve->responsable_id=$responsable->id;
        $eleve->save();

        return redirect()->route('front.pupil');
    }
}
