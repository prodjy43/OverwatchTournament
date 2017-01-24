@extends('layouts.layouts')

@section('content')

<div class="grid-container container">
    <form class="grid-100" role="form" method="POST" action="{{ url('/register') }}">
        <h1>Inscription</h1>
        {{ csrf_field() }}

        <label for="email" class="grid-20 mobile-grid-100 tablet-grid-100">Adresse e-mail :</label>
        <input id="email" type="email" class="grid-80 mobile-grid-100 tablet-grid-100" name="email" value="{{ old('email') }}" required>

        <label for="password" class="grid-20 mobile-grid-100 tablet-grid-100">Mot de passe :</label>
        <input id="password" type="password" class="grid-80 mobile-grid-100 tablet-grid-100" name="password" required>

        <label>
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Se souvenir de moi
        </label>
        
        <div class="grid-100 grid-parent">
            <a class="btn btn-link prefix-20 grid-30 suffix-5" href="{{ url('/password/reset') }}">Mot de passe oublié ?</a>
            <button type="submit" class="btn btn-submit grid-30">S'inscrire</button>
        </div>
    </form>
</div>

@endsection