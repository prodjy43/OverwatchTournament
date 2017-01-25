@extends('layouts.layouts')
@section('content')

    <div class="grid-container container">
        <div class="grid-100 news-full">
            <h2>Getsions des news</h2>
            <table>
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Créateur</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->users->pseudo }}</td>
                            <td>Posté le {{ $post->created_at->format('d.m')}}</td>
                            <td>
                                <a href="/admin/edit/news/{{ $post->slug }}" class="btn-action"><i class="fa fa-pencil"></i></a>
                                <a href="#!" data-id="{{ $post->id }}" onclick="event.preventDefault(); document.getElementById('delete-form-id').value = this.getAttribute('data-id'); document.getElementById('delete-form').submit()" class="btn-action"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
             <form id="delete-form" action="/admin" method="POST" style="display: none;">
                <input name="_method" type="hidden" value="DELETE">
                <input type="hidden" id="delete-form-id" name="id">
                {{ csrf_field() }}
            </form>
            <a href="/admin/add/news" class="btn btn-link">Ajouter une news</a>
        </div>
    </div>

@stop