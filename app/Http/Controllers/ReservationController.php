<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    public function inscriptionListe(){
        $attentes =  DB::select('select * from users where etat = 0');
        return view('vueadmin.liste_inscriptions', compact('attentes'));

    }

    public function validation($id)
    {
        $utilisat = user::find($id);
        $utilisat->etat=1;
        $utilisat->update();
        return redirect('/inscritListe');
    }

    public function reserv(){
        return view('reserve');
    }

    public function tarif(){
        return view('tarif');
    }

    public function inscription(){
        return view('auth.register');
    }

    public function Reservestore(Request $request)
    {  
            // Enregistrer les données dans la base de données
            $request->validate([
                'nom' => 'required',
                'prenom' => 'required',
                'numero' => 'required|unique:reservations,numero',
                'email' => 'required|unique:reservations,email',
                'ville_depart' => 'required',
                'ville_destination' => 'required',
                'type_reservation' => 'required',
                'heure_depart' => 'required',
                'jour_depart' => 'required',
                'nombre_place' => 'required'
            ]);
    
            // Créer une nouvelle instance de Réservation (ou votre modèle)
            $reservation = new Reservation();
    
            // Remplir les champs avec les données du formulaire
            $reservation->nom = $request->nom;
            $reservation->prenom = $request->prenom;
            $reservation->numero = $request->numero;
            $reservation->email = $request->email;
            $reservation->ville_depart = $request->ville_depart;
            $reservation->ville_destination = $request->ville_destination;
            $reservation->type_reservation = $request->type_reservation;
            $reservation->heure_depart = $request->heure_depart;
            $reservation->jour_depart = $request->jour_depart;
            $reservation->nombre_place = $request->nombre_place;
            $reservation->save();

        return redirect()->route('reservlist'); 
    }


    public function delete($id)
    {
        $reservation = reservation::find($id);
        $reservation->delete();
      
        return back()->with('statut', 'Reservation supprimée avec succès.');
    }


}


?>
