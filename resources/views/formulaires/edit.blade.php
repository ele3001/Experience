<div class="container">
    <h1>Modifier le formulaire</h1>
    <form action="{{ route('formulaire.update', $formulaire->id) }}" method="POST" class="experience-form">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $formulaire->prenom }}">
        </div>
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ $formulaire->nom }}">
        </div>
        <div class="form-group">
            <label for="nom_site_pratique">Nom du site de pratique</label>
            <input type="text" class="form-control" id="nom_site_pratique" name="nom_site_pratique" value="{{ $formulaire->nom_site_pratique }}">
        </div>
        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" class="form-control" id="titre" name="titre" value="{{ $formulaire->titre }}">
        </div>
        <div class="form-group">
            <label for="activite">Activité</label>
            <input type="text" class="form-control" id="activite" name="activite" value="{{ $formulaire->activite }}">
        </div>
        <div class="form-group">
            <label for="lieu">Lieu</label>
            <input type="text" class="form-control" id="lieu" name="lieu" value="{{ $formulaire->lieu }}">
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ $formulaire->date }}">
        </div>
        <div class="form-group">
            <label for="distance_sous_terre">Distance sous terre</label>
            <input type="number" class="form-control" id="distance_sous_terre" name="distance_sous_terre" value="{{ $formulaire->distance_sous_terre }}">
        </div>
        <div class="form-group">
            <label for="priorite">Priorité</label>
            <input type="text" class="form-control" id="priorite" name="priorite" value="{{ $formulaire->priorite }}">
        </div>
        <div class="form-group">
            <label for="description_probleme">Description du problème</label>
            <textarea class="form-control" id="description_probleme" name="description_probleme">{{ $formulaire->description_probleme }}</textarea>
        </div>
        
        <p>Modifié le {{ $formulaire->updated_at ->format('d/m/Y H:i:s') }} par {{ Auth::user()->name }}</p>
        


        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <a href="/espace-moderateur" class="btn btn-secondary">Retour à l'espace modérateur</a>
        </div>
    </form>
</div>

<style>
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 2rem;
    }

    .experience-form {
        background-color: #f8f9fa;
        padding: 2rem;
        border-radius: 0.5rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    label {
        font-weight: bold;
    }

    input, textarea {
        width: 100%;
        padding: 0.5rem;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
    }

    .form-actions {
        display: flex;
        justify-content: space-between;
        margin-top: 2rem;
    }

    .btn {
        padding: 0.5rem 1rem;
        border-radius: 0.25rem;
        font-weight: bold;
        cursor: pointer;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
        border: none;
    }

    .btn-secondary {
        background-color: #6c757d;
        color: #fff;
        border: none;
    }
</style>