<!-- admin-login.blade.php -->
<form method="POST" action="{{ route('admin.login') }}">
    @csrf

    <div>
        <label for="email">Adresse e-mail</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
    </div>

    <div>
        <label for="password">Mot de passe</label>
        <input id="password" type="password" name="password" required>
    </div>

    <div>
        <button type="submit">Connexion</button>
    </div>
</form>