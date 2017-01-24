@extends('layouts.layouts')

<!-- Main Content -->
@section('content')
<div class="grid-container container">
    <form class="grid-100" role="form" method="POST" action="{{ url('password/email') }}">
        <h1>Reset de mot de passe</h1>
        {{ csrf_field() }}

        <label for="email" class="grid-20 mobile-grid-100 tablet-grid-100">Adresse e-mail :</label>
        <input id="email" type="email" class="grid-80 mobile-grid-100 tablet-grid-100" name="email" value="{{ old('email') }}" required>
        
        <button type="submit" class="btn btn-submit prefix-20">Envoyer</button>
    </form>
</div>
@endsection
