{{-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de réservation</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/reserve.css')}}">

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
        </ul>
        <a href="index.html" class="btn-reservation">Se deconnecter</a>

        <div class="responsive-menu"></div>
    </header>
    <section class="sect">
        <!-- Formulaire de reservation  -->
        <form action="{{route('reserve.store')}}" method="post">
            @csrf
            <fieldset class="field">
            <legend>Réservation</legend>
            <div class="gauche">
                <div class="nom">
                    <label for="nom" class="label">Nom</label>
                    <input type="text" id="nom" name="nom">
                </div>
                <div class="numero">
                    <label for="numero" class="label">Numéro</label>
                    <input type="number" id="numero" name="numero">
                </div>
                <div class="maville">
                    <label for="ville" class="label">Ville actuelle</label>
                    <select id="ville_depart" name="ville_depart">
                    <option value="koudougou">Koudougou</option>
                    <option value="ouagadougou">Ouagadougou</option>
                    <option value="bobo">Bobo-Dioulasso</option>
                    <option value="banfora">Banfora</option>
                    <option value="dedougou">Dedougou</option>
                    <option value="ouahigouya">Ouahigouya</option>
                    </select>
                </div>
                <div class="destination">
                    <label for="ville">Votre destination</label>
                    <select id="ville" name="ville_destination">
                    <option value="ouagadougou">Ouagadougou</option>
                    <option value="koudougou">Koudougou</option>
                    <option value="bobo">Bobo-Dioulasso</option>
                    <option value="banfora">Banfora</option>
                    <option value="dedougou">Dedougou</option>
                    <option value="ouahigouya">Ouahigouya</option>
                    </select>
                </div> 
                <div>
                    <label for="type">Type de reservation </label>
                    <select id="type" name="type_reservation">
                        <option value="aller">Aller</option>
                        <option value="ar">Aller-retour</option>                 
                    </select>
                </div>                

            </div>
            <!-- Elements a droite -->
            <div class="droit">
                <div class="prenom">
                    <label for="prenom" class="label">Prénom</label>
                    <input type="text" id="prenom" name="prenom">
                </div>
                <div class="email">
                    <label for="email" class="label">Email</label>
                    <input type="text" id="email" name="email">
                </div>
                <div class="heure">
                    <label for="heure">Heure de départ</label>
                    <select id="heure" name="heure_depart">
                    <option value="">06h00</option>
                    <option value="">08h00</option>
                    <option value="10">10h00</option>
                    <option value="12">12h00</option>
                    <option value="14">14h00</option>
                    <option value="16">16h00</option>
                    <option value="18">18h00</option>
                    <option value="20">20h00</option>
                    <option value="22">22h00</option>
                </select>  
                </div>
                <div class="date">
                    <label>Jour de départ</label>
                    <input type="date" name="jour_depart" id="jour">    
                </div>
                 <div class="place">  
                    <label for="place">Nombre de place </label>
                    <select id="place" name="nombre_place">
                        <option value="1">1</option>
                        <option value="2">2</option> 
                        <option value="3">3</option> 
                    </select>
                </div>
            </div>
        </fieldset>
        
        <button >Envoyer</button>
        </form>
    </section>
    <footer>
        <div class="footer-container">
            <div class="footer-info">
                <p>&copy; 2023 VoyaPlace. Tous droits réservés.</p>
            </div>
            <div class="footer-contact">
                <ul>
                    <li><a href="#reserve">Nous contacter</a></li>
                    <li><a href="#popular-destination">Info sur les villes</a></li>
                    <li><a href="#a-propos">A propos</a></li>
                </ul>
            </div>
        </div>
    </footer>
   
    <script src="js/script.js">
        const forms = document.querySelector(".forms"),
  pwShowHide = document.querySelectorAll(".eye-icon"),
  links = document.querySelectorAll(".link");

pwShowHide.forEach(eyeIcon => {
eyeIcon.addEventListener("click", () => {
    let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");
    
    pwFields.forEach(password => {
        if(password.type === "password"){
            password.type = "text";
            eyeIcon.classList.replace("bx-hide", "bx-show");
            return;
        }
        password.type = "password";
        eyeIcon.classList.replace("bx-show", "bx-hide");
    })
    
})
})      

links.forEach(link => {
link.addEventListener("click", e => {
   e.preventDefault(); //preventing form submit
   forms.classList.toggle("show-signup");
})
})
    </script>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Réservation</title>
  <link rel="stylesheet" href="{{asset('css/reserve.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

    <!-- L'entete  -->
<header>
    <div class="logo">
        <a href="accueil.html"><img src="images/logo.png" alt="logo"></a>
    </div>
    <ul class="menu">
        <li><a href="{{ route('accueil') }}">Accueil</a></li>
        <li><a href="{{ route('tarif') }}">Tarif</a></li>
    </ul>
        <a href="{{ route('index') }}" class="btn-reservation">
            Se déconnecter
        </a>
    
        
    <div class="responsive-menu"></div>
</header>
<section class="sec">
  <form action="{{route('reserve.store')}}" method="post" id="reservationForm">
    @csrf
    <div class="form-group">
      <label for="firstName">Nom:</label>
      <input type="text" id="firstName" name="prenom" required>

      <label for="lastName">Prénom:</label>
      <input type="text" id="lastName" name="nom" required>

      <label for="phoneNumber">Numéro de téléphone:</label>
      <input type="tel" id="phoneNumber" name="numero" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="departureDate">Date de départ:</label>
      <input type="date" id="departureDate" name="jour_depart" required>
    
    </div>

    <div class="form-group">
      <label for="departureCity">Ville de départ:</label>
      <input type="text" id="departureCity" name="ville_depart" required>

      <label for="destinationCity">Ville de destination:</label>
      <input type="text" id="destinationCity" name="ville_destination" required>

      <label for="departureTime">Heure de départ:</label>
      <input type="time" id="departureTime" name="heure_depart" required>

      <label for="reservationType">Type de réservation:</label>
      <select id="reservationType" name="type_reservation" required>
        <option value="allerSimple">Aller-Simple</option>
        <option value="allerRetour">Aller-Retour</option>
      </select>

      <label for="numberOfSeats">Nombre de places:</label>
      <input type="number" id="numberOfSeats" name="nombre_place" min="1" required>
    </div>

    <button type="submit" onclick="submitForm()">Réserver</button>
  </form>
</section>
  <script>
    function submitForm() {
      var form = document.getElementById("reservationForm");
      if (form.checkValidity()) {
        // Ici, vous pouvez ajouter le code pour envoyer les données du formulaire à votre serveur ou effectuer d'autres actions nécessaires.
        alert("Formulaire soumis avec succès!");
      } else {
        alert("Veuillez remplir tous les champs correctement.");
      }
    }
  </script>

</body>
</html>
