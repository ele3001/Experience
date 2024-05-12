<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre titre ici</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        header {
        background-color: #000;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        padding: 10px 0;
        }

        .navbar {
        display: flex;
        justify-content: center;
        align-items: center;
        }

        .navbar-brand {
        display: flex;
        align-items: center;
        margin-right: auto; 
        margin-left: -80px;
        }

        .navbar-brand img {
        max-height: 80px;
        margin-right: 20px;
        border-radius: 50%;
        }

        .navbar-brand a,
        .navbar-nav .nav-link {
        color: #fff;
        font-weight: bold;
        text-decoration: none;
        }

        .navbar-nav {
        display: flex;
        align-items: center;
        list-style: none;
        margin: 0 20px; 
        margin-top: -63px;
        }

        .navbar-nav .nav-item {
        margin: 0 10px;
        }

        .navbar-nav .nav-link:hover {
        color: #f8f9fa;
        }

        .navbar-toggler-icon {
        background-color: #fff;
        }

        .navbar-collapse {
        display: flex;
        justify-content: center;
        align-items: center;
        }

        .navbar-collapse .btn {
        margin-left: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            font-family: Arial, sans-serif;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        th {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 12px 8px;
            text-align: left;
            font-weight: bold;
        }

        td {
            border: none;
            padding: 12px 8px;
            transition: background-color 0.3s ease;
        }

        tr:nth-child(even) td {
            background-color: #f9f9f9;
        }

        tr:hover td {
            background-color: #e9ecef;
        }

        .description {
            font-style: italic;
        }

        /* Styles pour les boutons */
        a.btn {
            display: inline-block;
            padding: 6px 12px;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.5;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            border: 1px solid transparent;
            border-radius: 4px;
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        a.btn:hover {
            background-color: #0056b3;
            border-color: #004a99;
        }
        h1{
            display: flex;
            text-align: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <div class="container">
                

            <a class="navbar-brand" href="/">
                    <img src="{{ asset('Logo_FFS.jpg') }}" alt="Logo">
                </a>

                

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/formulaire">Soumettre une expérience</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="\espace-moderateur">Espace Modérateur</a>
                        </li>
                   
            

                <!-- Authentification -->
                <li>
                    @guest
                        <a class="btn btn-outline-light" href="{{ route('login') }}">Connexion</a>
                    @else
                        <!-- Si l'utilisateur est connecté -->
                        <div class="dropdown">
                            <a class="btn btn-outline-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            </ul>
                </div>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    Déconnexion
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
    </li>
                            </div>
                        </div>
                    @endguest
                </div>
            </div>
        </nav>
    </header>

    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>


             
    
<div>
    <h1>Liste des expériences</h1>

    <table>
        <tr>
            <th>Titre</th>
            <th>Activité</th>
            <th>Lieu</th>
        </tr>

        @foreach ($formulaires as $formulaire)
        <tr>
            
            <td>{{ $formulaire->titre }}</td>
            <td>{{ $formulaire->activite }}</td>
            <td>{{ $formulaire->lieu }}</td>
        
            <td>
                <a href="/show/{{ $formulaire->id }}">
                    <button>Détails</button>
                </a>
            </td>
        </tr>
        @endforeach
    </table>