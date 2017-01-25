@extends('layouts.layouts')
@section('content')
<div class="grid-container container">
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
                {!! str_limit($post->content, 650) !!}...
                <div class="news-footer">
                    <a href="/blog/{{ $post->slug }}" class="readmore">Voir la news<i class="fa fa-chevron-right fa-fw"></i></a>
                </div>
            </div>
        @endforeach
    @endif
</div>
@stop