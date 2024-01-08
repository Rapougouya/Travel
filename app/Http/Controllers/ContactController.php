<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; 

class ContactController extends Controller
{

    public function ContactStore(Request $request)
    {
        // Validez les données du formulaire
        $request->validate([
            'nom_complet' => 'required',
            'objet' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'numero' => 'required|numeric',
            'adresse' => 'required',
        ]);

        // Créez une nouvelle instance du modèle et sauvegardez les données dans la base de données
        Contact::create($request->all());

        return redirect()->back()->with('success', 'Formulaire soumis avec succès.');
    }
}
