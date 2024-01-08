<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/tarif.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
  <!-- L'entete  -->
  <header>
    <div class="logo">
        <a href="accueil.html"><img src="images/logo.png" alt="logo"></a>
    </div>
        <ul class="menu">
            <li><a href="{{route('accueil')}}">Accueil</a></li>
            <li><a href="{{route('tarif')}}">Tarif</a></li>
            <li><a href="{{route('reserv')}}">Reservation</a></li>
        </ul>
        <a href="{{route('index')}}" class="btn-reservation">Se deconnecter</a>

    <div class="responsive-menu"></div>
</header>

<h2>Tableau des Tarifs de Voyage</h2>

<form id="tarifForm">
    <label for="depart">Ville de Départ:</label>
    <input type="text" id="depart" name="depart" required>

    <label for="destination">Ville de Destination:</label>
    <input type="text" id="destination" name="destination" required>

    <label for="tarif">Prix:</label>
    <input type="number" id="tarif" name="tarif" required>

    <button type="button" onclick="ajouterTarif()">Ajouter</button>
</form>

<table id="tarifTable">
    <thead>
        <tr>
            <th>Ville de Départ</th>
            <th>Ville de Destination</th>
            <th>Tarif</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="cell"><a class="btn-sm app-btn-secondary" href="#">Modifier</a>
                <a class="btn-sm app-btn-secondary" href="#">Supprimer</a>
            </td>
        </tr>
    </tbody>
</table>

<script>
    // Récupère les données du stockage local ou initialise un tableau vide
    var tarifs = JSON.parse(localStorage.getItem("tarifs")) || [];

    // Fonction pour construire et afficher le tableau
    function afficherTableau() {
        var tableBody = document.getElementById("tarifTable").getElementsByTagName('tbody')[0];

        // Réinitialise le contenu du corps du tableau
        tableBody.innerHTML = "";

        // Boucle à travers les données tarif
          // Boucle à travers les données tarif
          for (var i = 0; i < tarifs.length; i++) {
            var tarif = tarifs[i];

            var newRow = tableBody.insertRow();

            // Colonne Ville de Départ
            var departCell = newRow.insertCell(0);
            departCell.textContent = tarif.depart;

            // Colonne Ville de Destination
            var destinationCell = newRow.insertCell(1);
            destinationCell.textContent = tarif.destination;

            // Colonne Tarif
            var tarifCell = newRow.insertCell(2);
            tarifCell.textContent = tarif.tarif;

            // Colonne Action (Boutons Supprimer et Modifier)
            var actionCell = newRow.insertCell(3);

            // Bouton Supprimer
            var deleteButton = document.createElement("button");
            
            deleteButton.onclick = function() {
                supprimerTarif(i);
            };
            actionCell.appendChild(deleteButton);

            // Bouton Modifier
            var editButton = document.createElement("button");
            
            editButton.onclick = function() {
                modifierTarif(i);
            };
            actionCell.appendChild(editButton);
        }
    }
    

    // Fonction pour ajouter un tarif
    function ajouterTarif() {
        var depart = document.getElementById("depart").value;
        var destination = document.getElementById("destination").value;
        var tarif = document.getElementById("tarif").value;

        // Vérifier si les champs sont remplis
        if (depart && destination && tarif) {
            // Ajouter le tarif au tableau
            tarifs.push({ depart: depart, destination: destination, tarif: tarif });

            // Sauvegarder le tableau dans le stockage local
            localStorage.setItem("tarifs", JSON.stringify(tarifs));

            // Actualiser le tableau
            afficherTableau();

            // Réinitialiser les champs du formulaire
            document.getElementById("depart").value = "";
            document.getElementById("destination").value = "";
            document.getElementById("tarif").value = "";
        } else {
            alert("Veuillez remplir tous les champs.");
        }
    }

    // Fonction pour supprimer un tarif
    function supprimerTarif(index) {
        // Supprimer le tarif du tableau
        tarifs.splice(index, 1);

        // Sauvegarder le tableau dans le stockage local
        localStorage.setItem("tarifs", JSON.stringify(tarifs));

        // Actualiser le tableau
        afficherTableau();
    }

       // Fonction pour modifier un tarif
       function modifierTarif(index) {
        var tarif = tarifs[index];

        // Remplir les champs du formulaire avec les données du tarif sélectionné
        document.getElementById("depart").value = tarif.depart;
        document.getElementById("destination").value = tarif.destination;
        document.getElementById("tarif").value = tarif.tarif;

        // Supprimer le tarif du tableau
        supprimerTarif(index);
    }

    // Appeler la fonction pour afficher le tableau lors du chargement de la page
    window.onload = afficherTableau;
</script>

</body>
</html>
