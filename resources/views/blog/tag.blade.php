@extends('layouts.layouts')
@section('content')
<div class="grid-container container">

     <div class="grid-100 news-full">
        <h2>Recherche de news avec le tag "{{ $tag }}"</h2>
    </div>
    @if ($news === null)
        <div class="grid-100 panel news">
            <h2>Aucune news associé à ce tag</h2>
            <p>Il n'y as aucune news associé à ce tag pour le moment, revenez plus tard !</p>
        </div>
    @else
        @if ($news->isEmpty())
            <div class="grid-100 panel news">
                <h2>Aucune news associé à ce tag</h2>
                <p>Il n'y as aucune news associé à ce tag pour le moment, revenez plus tard !</p>
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
    @endif   
</div>
@stop