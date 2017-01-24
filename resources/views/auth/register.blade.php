@extends('layouts.layouts')

@section('content')

<div class="grid-container container">
    <form class="grid-100" role="form" method="POST" action="{{ url('/register') }}">
        <h1>Inscription</h1>
        {{ csrf_field() }}
        <label for="pseudo" class="grid-20 mobile-grid-100 tablet-grid-100">Pseudo :</label>
        <input id="pseudo" type="text" class="grid-80 mobile-grid-100 tablet-grid-100" name="pseudo" value="{{ old('pseudo') }}" required autofocus>

        <label for="email" class="grid-20 mobile-grid-100 tablet-grid-100">Adresse e-mail :</label>
        <input id="email" type="email" class="grid-80 mobile-grid-100 tablet-grid-100" name="email" value="{{ old('email') }}" required>

        <label for="password" class="grid-20 mobile-grid-100 tablet-grid-100">Mot de passe :</label>
        <input id="password" type="password" class="grid-80 mobile-grid-100 tablet-grid-100" name="password" required>

        <label for="password-confirm" class="grid-20 mobile-grid-100 tablet-grid-100">Confirmation du mot de passe :</label>
        <input id="password-confirm" type="password" class="grid-80 mobile-grid-100 tablet-grid-100" name="password_confirmation" required>

        <button type="submit" class="btn btn-submit prefix-20">S'inscrire</button>
    </form>
</div>

@endsection
