<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/listemanager.css')}}"> 
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/reserve.css')}}">
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>

<body>

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

    {{-- <a href="{{route('inscriptionListe')}}" class="btn btn-info"> Liste inscriptions </a> --}}

    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="contentAjout">
            <h2 class="border-bottom pb-2 mb-0">Liste des reservation</h2>
            

        </div> @if (Session:: has('status'))
        <h3>

            {{ Session::get('status') }}

        </h3> @endif
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Numero</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ville de depart</th>
                    <th scope="col">Ville destination</th>
                    <th scope="col">Jour de depart</th>
                    <th scope="col">Heure de depart</th>
                    <th scope="col">Type de reservation</th>
                    <th scope="col">Nombre de place</th>
                    <th scope="col" class="positionActionBouton">
                        <div class="actpo">Action</div>
                    </th>
                </tr>
            </thead>

            <tbody>

                @if (Session:: has('statut'))
                <tr>
                    <h2 style="color: red;">
                        {{ Session::get('statut') }}
                    </h2>
                </tr>
                @endif

                @foreach ( $reservations as $reservation )
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $reservation->nom}}</td>
                    <td>{{ $reservation->prenom}}</td>
                    <td>{{ $reservation->numero}}</td>
                    <td>{{ $reservation->email}}</td>
                    <td>{{ $reservation->ville_depart}}</td>
                    <td>{{ $reservation->ville_destination}}</td>
                    <td>{{ $reservation->type_reservation}}</td>
                    <td>{{ $reservation->heure_depart}}</td>
                    <td>{{ $reservation->jour_depart}}</td>
                    <td>{{ $reservation->nombre_place}}</td>

                    <td>
                        <div class="positionActionBouton">
                            <a href="{{url('delete/'.$reservation->id)}}" class="btn btn-danger" onclick="if(confirm('Voulez-vous supprimer cette reservation?')){document.getElementById.submit()}">Supprimer</a>
                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <script src="{{asset('js/bootstrap.min.js')}}"> </script>

</body>

</html>