<?php

namespace App\Http\Controllers;


use App\Models\Experience;
use App\Models\Formulaire; 

class ExperienceController extends Controller
{
    public function index()
    {
    
        
        $formulaires = Formulaire::where('etat', 'Publié')->get();
        
        return view('experience', ['formulaires'=>$formulaires]);
    }
    public function show($id)
    {
        $experience = Experience::findOrFail($id);
        $formulaire = $experience->formulaire; 
        return view('experience.show', compact('experience', 'formulaire'));
    }
}