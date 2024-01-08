<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Inscription </title>

        <link rel="stylesheet" href="{{asset('css/auth.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
                
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
                        
    </head>
    <body>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>
                        <div class="logo">
                            <a href="accueil.html"><img src="images/logo.png" alt="logo"></a>
                        </div>
                        <ul class="menu">
                            <li><a href="#">Accueil</a></li>
                            <li><a href="#a-propos">A propos</a></li>
                            <li><a href="#popular-destination">Destinations</a></li>
                            <li><a href="#reserve">Contact</a></li>
                        </ul>
                        <a href="#" class="btn-reservation">Se deconnecter</a>
                
                        <div class="responsive-menu"></div>
                    </header>
                    <form action="{{route('inscription')}}" method="post">
                        @csrf
                        <h2 style="font-size: 20px; margin-left: 70px;"> Formulaire d'inscription</h2>
                        <div class="field input-field">
                            <input type="text" placeholder="Nom" id="nom" name="nom" class="input">
                        </div>
                        <div class="field input-field">
                            <input type="text" placeholder="Prenom" name="prenom" id="prenom" class="input">
                        </div>
                        <div class="field input-field">
                            <input type="number" placeholder="Telephone" name="numero" id="telephone" class="input">
                        </div>
                        <div class="field input-field">
                            <input type="text" placeholder="Email" id="email" name="email" class="input">
                        </div>
                        <div class="field input-field">
                            <input type="password" placeholder="Mot de passe" name="password1" id="password" class="password">
                        </div>
                        <div class="field input-field">
                            <input type="password" placeholder="Confirmer le mot de passe" id="confirmPassword" name="password2" class="password">
                            
                        </div>
                        <div class="field button-field">
                            <button type="submit" id="validerBtn">Valider</button>
                        </div>
                    </form>
                    <div class="form-link">
                        <span>Vous avez déjà un compte?<a href="{{route('index')}}" class="link signup-link">Se connecter</a></span>
                    </div>
                </div>

                
            </div>
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
       
        <script>
            document.getElementById("validerBtn").addEventListener("click", function() {
                var nom = document.getElementById('nom').value;
                var prenom = document.getElementById('prenom').value;
                var telephone = document.getElementById('telephone').value;
                var email = document.getElementById('email').value;
                var password = document.getElementById('password').value;
                var confirmPassword = document.getElementById('confirmPassword').value;
            
                if (nom === '' || prenom === '' || telephone === '' || email === '' || password === '' || confirmPassword === '') {
                    alert("Veuillez remplir tous les champs.");
                }
            });
            </script>
            
    </body>
</html>