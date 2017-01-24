@extends('layouts.layouts')

@section('content')
<div class="grid-container container">
    <form class="grid-100" role="form" method="POST" action="{{ url('password/reset') }}">
        <h1>Nouveau mot de passe</h1>
        {{ csrf_field() }}
        <input type="hidden" name="token" value="{{ $token }}">
        <label for="email" class="grid-20 mobile-grid-100 tablet-grid-100">Adresse e-mail :</label>
        <input id="email" type="email" class="grid-80 mobile-grid-100 tablet-grid-100" name="email" value="{{ old('email') }}" required>

        <label for="password" class="grid-20 mobile-grid-100 tablet-grid-100">Mot de passe :</label>
        <input id="password" type="password" class="grid-80 mobile-grid-100 tablet-grid-100" name="password" required>

        <label for="password-confirm" class="grid-20 mobile-grid-100 tablet-grid-100">Confirmation du mot de passe :</label>
        <input id="password-confirm" type="password" class="grid-80 mobile-grid-100 tablet-grid-100" name="password_confirmation" required>

        <button type="submit" class="btn btn-submit prefix-20">Changer le mot de passe</button>
    </form>
</div>
@endsection
