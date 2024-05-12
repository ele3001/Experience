<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Détails</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }
            .container {
                max-width: 800px;
                margin: 0 auto;
                padding: 40px;
                background-color: #fff;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            h1 {
                text-align: center;
                margin-bottom: 30px;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                font-size: 16px;
            }
            th, td {
                padding: 12px 15px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
            th {
                background-color: #f2f2f2;
                font-weight: bold;
            }
            td {
                color: #555;
            }
            a {
                display: block;
                text-align: center;
                margin-top: 30px;
                color: #007bff;
                text-decoration: none;
            }
            a:hover {
                color: #0056b3;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Détails des expériences</h1>
            <table>
                <tr>
                    <th>Nom du site pratiqué</th>
                    <td>{{ $formulaire->nom_site_pratique }}</td>
                </tr>
                <tr>
                    <th>Titre</th>
                    <td>{{ $formulaire->titre }}</td>
                </tr>
                <tr>
                    <th>Activité</th>
                    <td>{{ $formulaire->activite }}</td>
                </tr>
                <tr>
                    <th>Lieu</th>
                    <td>{{ $formulaire->lieu }}</td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>{{ $formulaire->date }}</td>
                </tr>
                <tr>
                    <th>Distance sous terre</th>
                    <td>{{ $formulaire->distance_sous_terre }}</td>
                </tr>
                <tr>
                    <th>Description du problème</th>
                    <td>{{ $formulaire->description_probleme }}</td>
                </tr>
                <tr>
            </table>
            <a href="/">Retour à l'expérience</a>
        </div>
    </body>
</html>