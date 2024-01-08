<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Connexion </title>

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
                            <a href="index.html"><img src="images/logo.png" alt="logo"></a>
                        </div>
                        <ul class="menu">
                            <li><a href="#">Accueil</a></li>
                            <li><a href="#a-propos">A propos</a></li>
                            <li><a href="#popular-destination">Destinations</a></li>
                            <li><a href="#reserve">Contact</a></li>
                        </ul>
                        <a href="{{route('index')}}" class="btn-reservation">Se deconnecter</a>
                
                        <div class="responsive-menu"></div>
                    </header>
                    <form action="{{route('handlelogin')}}" method="post">
                        @csrf
                        <div class="field input-field">
                            <input type="email" placeholder="Email" name="email" id="email" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Mot de passe" name="password" id="password" class="password">
                        </div>

                        <div class="form-link">
                            <a href="#" class="forgot-pass">Mot de passe oublié</a>
                        </div>

                        <div class="field button-field">
                            <button type="submit" id="validerBtn">Connexion</button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Vous n'avez pas de compte?<a href="{{route('inscription')}}" class="link signup-link">S'inscrire</a></span>
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
                var email = document.getElementById('email').value;
                var password = document.getElementById('password').value;
            
                if ( email === '' || password === '') {
                    alert("Veuillez remplir tous les champs.");
                }
            });
            </script>
    </body>
</html>