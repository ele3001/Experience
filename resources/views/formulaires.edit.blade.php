<h1>Modifier le formulaire</h1>

<form action="{{ route('formulaires.update', $formulaire->id) }}" method="POST">
    @csrf
    @method('PUT')

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
    <div class="form-group">
        <label for="etat">Etat</label>
        <input type="text" class="form-control" id="etat" name="etat" value="{{ $formulaire->etat }}">
    </div>

    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>