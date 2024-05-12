<div class="container">
    <h1>Expérience à soumettre</h1>
    <form method="POST" action="{{ route('submit.formulaire') }}" class="experience-form">
        @csrf

        <div class="form-group">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>
        </div>

        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>
        </div>

        <div class="form-group">
            <label for="nom_site_pratique">Nom du site de pratique</label>
            <input type="text" id="nom_site_pratique" name="nom_site_pratique">
        </div>
        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" id="titre" name="titre">
        </div>
        <div class="form-group">
            <label for="activite">Activité</label>
            <input type="text" id="activite" name="activite">
        </div>
        <div class="form-group">
            <label for="lieu">Lieu</label>
            <input type="text" id="lieu" name="lieu">
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" id="date" name="date">
        </div>
        <div class="form-group">
            <label for="distance_sous_terre">Distance sous terre</label>
            <input type="text" id="distance_sous_terre" name="distance_sous_terre">
        </div>
        <div class="form-group">
            <label for="priorite">Priorité</label>
            <input type="text" id="priorite" name="priorite">
        </div>
        <div class="form-group">
            <label for="description_probleme">Description du problème</label>
            <textarea id="description_probleme" name="description_probleme"></textarea>
        </div>
       

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Soumettre</button>
            <a href="/" class="btn btn-secondary">Retour à l'expérience</a>
        </div>
    </form>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
</div>

<script>
    document.querySelector('form.experience-form').addEventListener('submit', function(event) {
        event.preventDefault();
        this.submit();
        alert('Formulaire soumis avec succès !');
    });
</script>

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