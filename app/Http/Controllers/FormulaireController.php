<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formulaire; // Assurez-vous d'importer le modèle Experience



class FormulaireController extends Controller
{
    public function submitExperience(Request $request)
    {
        // Valider les données soumises par le formulaire
        $validatedData = $request->validate([
            'prenom' => 'nullable',
            'nom' => 'nullable',
            'site_pratique' => 'nullable',
            'titre' => 'nullable',
            'activite' => 'nullable',
            'lieu' => 'nullable',
            'date' => 'nullable|date',
            'distance' => 'nullable|numeric',
            'priorite' => 'nullable',
            'description' => 'nullable',
            'etat' => 'nullable|boolean',
        
        ]);

    
        $formulaire = new formulaire();
        $formulaire->prenom = $validatedData['prenom'];
        $formulaire->nom = $validatedData['nom'];
        $formulaire->etat = $validatedData['etat'] ?? false;
        
        $formulaire->save();

        // Rediriger l'utilisateur vers une page de confirmation ou une autre page appropriée
        return redirect()->route('confirmation')->with('success', 'Expérience soumise avec succès.');
    }

        public function submit(Request $request)
    {
        $formulaire = new Formulaire();
        $formulaire->nom = $request->input('nom');
        $formulaire->prenom = $request->input('prenom');
        $formulaire->nom_site_pratique = $request->input('nom_site_pratique');
        $formulaire->titre = $request->input('titre');
        $formulaire->activite = $request->input('activite');
        $formulaire->lieu = $request->input('lieu');
        $formulaire->date = $request->input('date');
        $formulaire->distance_sous_terre = $request->input('distance_sous_terre');
        $formulaire->priorite = $request->input('priorite');
        $formulaire->description_probleme = $request->input('description_probleme');
        $formulaire->etat = $request->input('etat');
    

        $formulaire->save();

        return redirect()->back()->with('success', 'Formulaire soumis avec succès.');
    }

    public function show(Formulaire $formulaire)
{
    return view('show', compact('formulaire'));
}
        public function espaceModerateur()
    {
        $formulaires = Formulaire::all(); 

        return view('espace-moderateur', ['formulaires' => $formulaires]);
    }
    public function edit(Formulaire $formulaire)
    {
        return view('formulaires.edit', compact('formulaire'));
    }
    
    public function update(Request $request, $id)
    {
        $formulaire = formulaire::find($id);
            $formulaire->nom = $request->input('nom');
            $formulaire->prenom = $request->input('prenom');
            $formulaire->nom_site_pratique = $request->input('nom_site_pratique');
            $formulaire->titre = $request->input('titre');
            $formulaire->activite = $request->input('activite');
            $formulaire->lieu = $request->input('lieu');
            $formulaire->date = $request->input('date');
            $formulaire->distance_sous_terre = $request->input('distance_sous_terre');
            $formulaire->priorite = $request->input('priorite');
            $formulaire->description_probleme = $request->input('description_probleme');
            $formulaire->etat = $request->input('etat');
            $formulaire->created_at = now();
            $formulaire->save();
        return redirect('/');
    }
        public function publish(Formulaire $formulaire)
    {
        $formulaire->etat = 'Publié';
        $formulaire->save();

        return redirect()->route('espace-moderateur')->with('success', 'Le formulaire a été publié avec succès.');
    }
    public function unpublish(Formulaire $formulaire)
{
    $formulaire->etat = 'Non publié';
    $formulaire->save();

    return redirect()->route('espace-moderateur')->with('success', 'Le formulaire a été dépublié avec succès.');
}

    

}