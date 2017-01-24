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
        <p>{{$post->content}}</p>
        <div class="tags">
            <i>Tags :</i>
            @foreach ($post->tags as $tag)
                <span><a href="/tags/{{$tag->name}}">#{{ $tag->name }}</a></span>
            @endforeach
        </div>
    </div>
</div>
@stop