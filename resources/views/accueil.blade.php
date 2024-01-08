<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
   
    <header>
        <div class="logo">
            <a href="accueil.html"><img src="../images/logo.png" alt="logo"></a>
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
    
    <section id="home"> 
        <h4>Voyagez en Sécurité</h4>
        <p>La sécurité pendant les déplacements assure la protection des voyageurs contre les dangers potentiels, <br> tels que les accidents, le vol, les agressions et les incidents imprévus.</p>
        <a href="{{route('reserv')}}" class="btn-reservation home-btn">Réserver Maintenant</a>
        <div class="find_trip">
        </div>
    </section>
    <section id="a-propos">
        <h1 class="title">A propos</h1>
        <div class="img-desc">
           <div class="left">
                <video src="images/video1.mp4" autoplay loop></video>
           </div>
            <div class="right">
                <h3>Nous voyageons pour chercher d'autres états, d'autres vies, d'autres âmes.</h3>
                <p>Les voyages avec des moyens de transport jouent un rôle crucial dans la connectivité et le développement à divers niveaux comme le fait d'explorer de nouveaux endroits, de rencontrer différentes cultures et de favoriser les échanges sociaux et économiques.</p>
                
            </div>
        </div>
        
    </section>
    <section id="popular-destination">
        <h1 class="title">Villes et leurs descriptions</h1>
        <div class="content">
            <div class="box">
                <img src="images/cour1.jpg" alt="">
                <div class="content">
                    <div>
                        <h4>Koudougou</h4>
                        <p>Connue pour ses festivals, en particulier le SIAO (Salon International de l'Artisanat de Ouagadougou), Koudougou est une ville dynamique. Elle est reconnue pour son artisanat et son riche patrimoine culturel.</p>
                       
                        
                    </div>
                </div>
            </div>
            <div class="box">
                <img src="images/ouagadougou.jpg" alt="">
                 <div class="content">
                    <div>
                        <h4>Ouagadougou</h4>
                        <p> Capitale du Burkina Faso, Ouagadougou est le centre politique, économique et culturel du pays. Elle abrite des marchés animés, des festivals culturels, des musées, des centres artistiques et la splendide Grande Mosquée.</p> 
                    </div>
                </div>
            </div>
            <div class="box">
                <img src="images/bobo.jfif" alt="">
                <div class="content">
                    <div>
                        <h4>Bobo-dioulasso</h4>
                        <p>Deuxième plus grande ville du pays, Bobo-Dioulasso est célèbre pour son marché, ses festivals culturels, sa mosquée historique et son architecture coloniale. Elle est également renommée pour sa musique traditionnelle.</p>
                        
                        
                    </div>
                </div>
            </div>
             <div class="box">
                <img src="images/banfora.jpg" alt="">
                <div class="content">
                    <div>
                        <h4>Banfora</h4>
                        <p>Cette ville est appréciée pour ses attractions naturelles, notamment les cascades de Karfiguéla et de Banfora, les pics de Sindou (formations rocheuses) et la mare aux hippopotames.</p>
                    </div>
                </div>
            </div>
             <div class="box">
                <img src="images/dedoug.jfif" alt="">
                <div class="content">
                    <div>
                        <h4>Dedougou</h4>
                        <p>Dédougou est une ville située dans le nord-ouest du Burkina Faso. Elle est célèbre pour accueillir le Festival International des Masques et des Arts (FESTIMA). Cet événement culturel majeur réunit des artistes, des danseurs, des musiciens et des spectateurs venant du monde entier pour célébrer la tradition des masques. </p>
                    </div>
                </div>
            </div>
             <div class="box">
                <img src="images/naaba2.jfif" alt="">
                <div class="content">
                    <div>
                        <h4>Ouahigouya</h4>
                        <p>Ville située au nord du Burkina Faso, Ouahigouya est un centre commercial régional important. Elle offre une ambiance tranquille et possède des marchés vivants.</p>
                        <p>Ea iusto ipsa repudiandae amet conseq.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="reserve">
        <h1 class="title">Contact</h1>
        <form action="{{route('contact.store')}}" method="post">
            @csrf
            <div class="left-right">
                <div class="left">
                    <label>Nom Complet</label>
                    <input type="text" name="nom_complet">
                    <label>Objet</label>
                    <input type="text" name="email">
                    <label>Email</label>
                    <input type="text" name="email">
                    <label>Message</label>
                    <textarea name="message" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="right">
                    <label>Numéro</label>
                    <input type="tel" name="numero">
                    <label>Adresse</label>
                    <input type="text" name="adresse">
                </div>
            </div>
            <button type="submit">Envoyer</button>
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
    


    <script>
        var toggle_menu = document.querySelector('.responsive-menu');
        var menu = document.querySelector('.menu');
        toggle_menu.onclick= function(){
             toggle_menu.classList.toggle('active');
             menu.classList.toggle('responsive')
        }
    </script>


</body>
</html>
