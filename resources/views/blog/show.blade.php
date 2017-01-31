@extends('layouts.layouts')
@section('content')
<div class="banner" style="background-image:url(../images/news/{{ $post->images }})">
    <div class="banner-opacity">
        <span class="auteur"><i class="fa fa-user"></i> {{ $post->users->pseudo }}</span>
        <div class="date">
            <span class="day">{{ $post->created_at->format('d')}}</span>
            <span class="mounth">{{ $post->created_at->format('m')}}</span>
        </div>
    </div>
</div>
<div class="grid-container container">
    <div class="grid-100 news-full">
        <h2>{{ $post->title }}</h2>
        {!! $post->content !!}
        <div class="tags">
            <i>Tags :</i>
            @if ($post->tags->isEmpty())
                <strong>Aucun tag !</strong>
            @else
                @foreach ($post->tags as $tag)
                    <span><a href="/tags/{{$tag->name}}">#{{ $tag->name }}</a></span>
                @endforeach
            @endif
        </div>
        <div class="share">
            <a href="http://www.facebook.com/sharer.php?s=100&p[title]=Nouvelle news sur Overwatch Swiss Tournament&p[url]={{ Request::url() }}&p[summary]=Allez regarder la nouvelle news sur le site Overwatch Swiss Stream !!! C'est allucinant&p[images][0]={{ URL::to('/')}}/images/news/{{ $post->images }}" class="btn-share" title="Partager sur facebook"><i class="fa fa-facebook"></i></a>
            <a href="http://twitter.com/share?text={{ $post->title }} - Overwatch Swiss Tournament&url={{ Request::url() }}&hashtags=@foreach($post->tags as $tag){{ $tag->name }},@endforeach" class="btn-share" title="Partager sur twitter"><i class="fa fa-twitter"></i></a>
            <a href="https://plus.google.com/share?url={{ Request::url() }}" class="btn-share" title="Partager sur google +"><i class="fa fa-google-plus"></i></a>
        </div>
    </div>
    <div class="grid-container news-full grid-parent">
        <h2>Commentaires</h2>
        <div class="comment grid-100">
            <h3>Pseudo de la personne</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis et numquam aspernatur temporibus earum, pariatur doloremque molestias optio explicabo eveniet a ea ad fuga. Repudiandae magnam natus enim placeat tempora!</p>
            <div class="comment-footer">
                <span class="like"><i class="fa fa-heart-o"></i></span>
                <a href="#" class="link">Répondre</a>
            </div>
        </div>
    </div>
</div>
@stop