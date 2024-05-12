<div class="container">
    <h1>Espace modérateur</h1>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Activité</th>
                    <th>Lieu</th>
                    <th>Date de soumission</th>
                    <th>Distance sous terre</th>
                    <th>Priorité</th>
                    <th>Description du problème</th>
                    <th>État</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($formulaires as $formulaire)
                <tr>
                    <td>{{ $formulaire->titre }}</td>
                    <td>{{ $formulaire->activite }}</td>
                    <td>{{ $formulaire->lieu }}</td>
                    <td>{{ $formulaire->created_at->format('d/m/Y') }}</td>
                    <td>{{ $formulaire->distance_sous_terre }}</td>
                    <td>{{ $formulaire->priorite }}</td>
                    <td>{{ Str::limit($formulaire->description_probleme, 50) }}</td>
                    <td>
                        @if ($formulaire->etat == 'Publié')
                        <span class="badge badge-success">{{ $formulaire->etat }}</span>
                        @else
                        <span class="badge badge-secondary">{{ $formulaire->etat }}</span>
                        @endif
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('formulaire.edit', $formulaire->id) }}" class="btn btn-primary btn-sm">Modifier</a>
                            @if ($formulaire->etat == 'Publié')
                            <form action="{{ route('formulaire.unpublish', $formulaire->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-warning btn-sm">Dépublier</button>
                            </form>
                            @else
                            <form action="{{ route('formulaire.publish', $formulaire->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-success btn-sm" onclick="return confirm('Êtes-vous sûr que vous voulez publier cette expérience ?')">Publier</button>
                            </form>
                            @endif
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="/" class="btn btn-secondary">Retour à l'accueil</a>
</div>



<style>
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem;
    }

    .table {
        background-color: #fff;
        border-radius: 0.5rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    }

    .table thead th {
        background-color: #f8f9fa;
        font-weight: bold;
    }

    .table td, .table th {
        padding: 1rem;
        vertical-align: middle;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f8f9fa;
    }

    .table-hover tbody tr:hover {
        background-color: #e9ecef;
    }

    .btn {
        font-weight: bold;
        cursor: pointer;
    }

    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
        border: none;
    }

    .btn-success {
        background-color: #28a745;
        color: #fff;
        border: none;
    }

    .badge {
        font-size: 0.75rem;
        font-weight: bold;
        padding: 0.4rem 0.6rem;
        border-radius: 0.25rem;
    }

    .badge-success {
        background-color: #28a745;
        color: #fff;
    }

    .badge-secondary {
        background-color: #6c757d;
        color: #fff;
    }
</style>