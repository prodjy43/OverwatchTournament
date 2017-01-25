@extends('layouts.layouts')
@section('content')

    <div class="grid-container container">
        <form class="grid-100" role="form" method="POST" action="/admin/add/news">
            <h1>Créer une news</h1>
            {{ csrf_field() }}

            <label for="title" class="grid-20 mobile-grid-100 tablet-grid-100">Titre :</label>
            <input id="title" type="text" class="grid-80 mobile-grid-100 tablet-grid-100" name="title" value="{{ old('title') }}" required>

            <label for="content" class="grid-20 mobile-grid-100 tablet-grid-100">Contenu :</label>
            <textarea id="content" class="grid-80 mobile-grid-100 tablet-grid-100" name="content" required>{{ old('content') }}</textarea>

            <label for="tags" class="grid-20 mobile-grid-100 tablet-grid-100">Tags :</label>
            <select name="tags[]" id="tags" multiple class="grid-80 mobile-grid-100 tablet-grid-100">
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>

            <button type="submit" class="btn btn-submit prefix-20">Ajouter</button>
        </form>
    </div>

@stop