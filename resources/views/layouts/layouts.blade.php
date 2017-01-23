<!DOCTYPE html>
<html>
<head>
	<title>Overwatch Swiss Tournament - OST</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link rel="stylesheet" type="text/css" href="css/unsemantic-grid-responsive-tablet.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
</head>
<body>
	<nav class="nav-big hide-on-mobile hide-on-tablet">
		<ul>
			<li><a href="/">Accueil</a></li>
			<li><a href="#">Tournois en live</a></li>
			<li><a href="team">Equipe</a></li>
			<li><a href="#">Programmation</a></li>
			<li><a href="#">Resultats</a></li>
			<li><a href="/about">A propos</a></li>
		</ul>
	</nav>
	<nav class="nav-small hide-on-desktop">
		<a href="#!" class="fa fa-bars menu-btn fa-2x"></a>
		<ul>
			<li><a href="/">Accueil</a></li>
			<li><a href="#">Tournois en live</a></li>
			<li><a href="/team">Equipe</a></li>
			<li><a href="#">Programmation</a></li>
			<li><a href="#">Resultats</a></li>
			<li><a href="/about">A propos</a></li>
		</ul>
	</nav>
	
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
	<script src="js/jquery.js"></script>
	<script src="js/app.js"></script>
</body>
</html>