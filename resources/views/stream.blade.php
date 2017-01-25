@extends('layouts.layouts')
@section('content')

    <div class="stream-banner">
        <div class="grid-80 mobile-grid-100 tablet-grid-100 stream-video">
            <iframe frameborder="0" scrolling="no" src="http://twitch.tv/prodjy43/embed" height="100%" width="100%" background="#f5f5f5"></iframe>
        </div>
        <div class="grid-20 hide-on-mobile hide-on-tablet stream-chat">
            <iframe frameborder="0" scrolling="no" src="http://twitch.tv/prodjy43/chat?popout=" height="100%" width="100%"></iframe>
        </div>
    </div>
    <div class="grid-container">
        <div class="grid-100 news-full">
            <h2>Titre du stream ou du tournois</h2>
            <p>Une petite description pour <strong>expliquer</strong> ce qui ce passe au <strong>abonnées</strong> <br> Par exemple je suis une pomme !!!</p>
        </div>
        <div class="tags">
            <i>Tags :</i>
            <strong>Aucun tag !</strong>
        </div>
        <div class="grid-100 share">
            <a href="#" class="btn-share" title="Partager sur facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="btn-share" title="Partager sur twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="btn-share" title="Partager sur google +"><i class="fa fa-google-plus"></i></a>
        </div>
    </div>
@stop