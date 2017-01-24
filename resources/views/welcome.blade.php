@extends('layouts.layouts')
@section('content')
    <div class="banner">
        <div class="banner-opacity">
            <h1>Overwatch swiss tournament</h1>
            <div class="grid-container">
                <div class="grid-50">
                    <a href="#" class="btn btn-full">Tournois en live</a>
                </div>
                <div class="grid-50">
                    <a href="/about" class="btn btn-thin">A propos</a>
                </div>
            </div>
        </div>
    </div>
    <div class="grid-container">
        @if ($news->isEmpty())
            <div class="grid-100 panel news">
                    <h2>Aucune news pour le moment</h2>
                    <p>Il n'y as aucune news de postée pour le moment revenez dans un moment !</p>
                </div>
        @else
            @foreach ($news as $post)
                <div class="grid-100 panel news">
                    <div class="news-banner" style="background-image:url(../images/news/{{ $post->images }});"></div>
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->content }}</p>
                    <div class="news-footer">
                        <a href="/blog/{{ $post->slug }}" class="readmore">Read more <i class="fa fa-chevron-right fa-fw"></i></a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@stop