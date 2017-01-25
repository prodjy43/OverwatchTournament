<!DOCTYPE html>
<html>
<head>
	<title>Overwatch Swiss Tournament - OST</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/unsemantic-grid-responsive-tablet.css">
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.css">
	<link rel="stylesheet" href="text/css" href="/css/select2.css">
</head>
<body>
	<nav class="nav-big hide-on-mobile hide-on-tablet">
		<ul class="nav-left">
			<li><a href="/">Accueil</a></li>
			<li><a href="/blog">Blog</a></li>
			<li><a href="/stream">Tournois en live</a></li>
			<li><a href="/team">Equipe</a></li>
			<li><a href="#">Programmation</a></li>
			<li><a href="#">Resultats</a></li>
			<li><a href="/about">A propos</a></li>
		</ul>
		<ul class="nav-right">
			@if (Auth::check())
				<li><a href="#">Mon compte</a></li>
				<li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a></li>
                @if (Auth::user()->grade_id == '2')
                	<li><a href="/admin">Administration</a></li>
                @endif
			@else
				<li><a href="/login">Connexion</a></li>
				<li><a href="/register">Inscription</a></li>
			@endif
		</ul>
	</nav>
	<nav class="nav-small hide-on-desktop">
		<a href="#!" class="fa fa-bars menu-btn fa-2x"></a>
		<ul>
			<li><a href="/">Accueil</a></li>
			<li><a href="/blog">Blog</a></li>
			<li><a href="/stream">Tournois en live</a></li>
			<li><a href="/team">Equipe</a></li>
			<li><a href="#">Programmation</a></li>
			<li><a href="#">Resultats</a></li>
			<li><a href="/about">A propos</a></li>
			@if (Auth::check())
				<li><a href="#">Mon compte</a></li>
				@if (Auth::user()->grade_id == '2')
                	<li><a href="/admin">Administration</a></li>
                @endif
				<li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a></li>
			@else
				<li><a href="/login">Connexion</a></li>
				<li><a href="/register">Inscription</a></li>
			@endif
		</ul>
	</nav>
	 <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
		{{ csrf_field() }}
	</form>
	
	@yield('content')

	<footer>
		<div class="grid-container container">
			<div class="grid-33 footer-content">
				<h3>Nos partenaires</h3>
				<ul>
					<li>CorBock</li>
					<li>Instant Gaming</li>
					<li>SlsTv</li>
					<li>Twitch</li>
				</ul>
			</div>
			<div class="grid-33 footer-content">
				<hr class="hide-on-desktop">
				<h3>Créateur / Développeurs</h3>
				<ul>
					<li>ProDJy - Dev et Créateur</li>
					<li>CorBock - Créateur</li>
				</ul>
			</div>
			<div class="grid-33 footer-content">
				<hr class="hide-on-desktop">
				<h3>Streamers</h3>
				<ul>
					<li>ProDJy</li>
				</ul>
			</div>
			<div class="grid-100 footer-content">
			<hr>
				<p>Copyright &copy; OverwatchTournament by ProDJy</p>
			</div>
		</div>
	</footer>
	<script src="/js/jquery.js"></script>
	<script src="/js/select2.js"></script>
	<script src="/js/app.js"></script>
</body>
</html>