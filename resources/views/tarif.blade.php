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
            <th>Prix</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        
    </tbody>
</table>

<script>
    var tarifs = JSON.parse(localStorage.getItem("tarifs")) || [];

    function afficherTableau() {
        var tableBody = document.getElementById("tarifTable").getElementsByTagName('tbody')[0];
        tableBody.innerHTML = "";

        for (var i = 0; i < tarifs.length; i++) {
            var tarif = tarifs[i];
            var newRow = tableBody.insertRow();

            var departCell = newRow.insertCell(0);
            departCell.textContent = tarif.depart;

            var destinationCell = newRow.insertCell(1);
            destinationCell.textContent = tarif.destination;

            var tarifCell = newRow.insertCell(2);
            tarifCell.textContent = tarif.tarif;

            var actionCell = newRow.insertCell(3);

            var deleteButton = document.createElement("button");
            deleteButton.textContent = "Supprimer";
            (function(index) {
                deleteButton.onclick = function() {
                    supprimerTarif(index);
                };
            })(i);
            actionCell.appendChild(deleteButton);

            var editButton = document.createElement("button");
            editButton.textContent = "Modifier";
            (function(index) {
                editButton.onclick = function() {
                    modifierTarif(index);
                };
            })(i);
            actionCell.appendChild(editButton);
        }
    }

    function ajouterTarif() {
        var depart = document.getElementById("depart").value;
        var destination = document.getElementById("destination").value;
        var tarif = document.getElementById("tarif").value;

        if (depart && destination && tarif) {
            tarifs.push({ depart: depart, destination: destination, tarif: tarif });
            localStorage.setItem("tarifs", JSON.stringify(tarifs));
            afficherTableau();
            document.getElementById("depart").value = "";
            document.getElementById("destination").value = "";
            document.getElementById("tarif").value = "";
        } else {
            alert("Veuillez remplir tous les champs.");
        }
    }

    function modifierTarif(index) {
    var tarif = tarifs[index];

    document.getElementById("depart").value = tarif.depart;
    document.getElementById("destination").value = tarif.destination;
    document.getElementById("tarif").value = tarif.tarif;

    var editButton = document.querySelector("form button");
    editButton.textContent = "Modifier";
    editButton.style.backgroundColor = "blue";
    editButton.style.color = "white";
    editButton.onclick = function() {
        sauvegarderModification(index);
    };

    var deleteButton = document.createElement("button");
    deleteButton.textContent = "Supprimer";
    deleteButton.style.backgroundColor = "red";
    deleteButton.style.color = "white";
    deleteButton.onclick = function() {
        supprimerTarif(index);
        document.getElementById("depart").value = "";
        document.getElementById("destination").value = "";
        document.getElementById("tarif").value = "";
    };

    var actionCell = document.getElementById("tarifTable").rows[index + 1].cells[3];
    actionCell.innerHTML = "";
    actionCell.appendChild(deleteButton);
}

    function sauvegarderModification(index) {
        var depart = document.getElementById("depart").value;
        var destination = document.getElementById("destination").value;
        var tarif = document.getElementById("tarif").value;

        if (depart && destination && tarif) {
            tarifs.splice(index, 0, { depart: depart, destination: destination, tarif: tarif });
            localStorage.setItem("tarifs", JSON.stringify(tarifs));
            afficherTableau();
            document.getElementById("depart").value = "";
            document.getElementById("destination").value = "";
            document.getElementById("tarif").value = "";

            var addButton = document.querySelector("form button");
            addButton.textContent = "Ajouter";
            addButton.style.backgroundColor = "green";
            addButton.style.color = "white";
            addButton.onclick = ajouterTarif;
        } else {
            alert("Veuillez remplir tous les champs.");
        }
    }

    function supprimerTarif(index) {
    // Demande une confirmation avant de supprimer
    var confirmation = confirm("Êtes-vous sûr de vouloir supprimer ce tarif ?");

    if (confirmation) {
    // Supprime le tarif si l'utilisateur a confirmé
    tarifs.splice(index, 1);
    localStorage.setItem("tarifs", JSON.stringify(tarifs));
    afficherTableau();
    }
    }

    window.onload = afficherTableau;
</script>

</body>
</html>
