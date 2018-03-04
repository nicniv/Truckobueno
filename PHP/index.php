<!DOCTYPE html>
<html>

<head>
	<title>Truck O Bueno - Accueil</title>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="../CSS/style.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<header class="topbar">
		<div class="reseaux">
			<!-- icon rsx = reseaux sociaux -->
			<a href="https://www.facebook.com/"><img class="iconrsx" src="../image/facebook.png"></a>
			<a href="https://www.twitter.com"><img class="iconrsx" src="../image/twitter2.png"></a>
			<a href="https://www.instagram.com"><img class="iconrsx" src="../image/instagram.png"></a>

			<!--icone caddie -->
			<a href="" class="icres" src="../image/shoppingcart.png"></a>
		</div>
		<div class="connexioninsc">
			<!-- input field inscription icone + input field -->
			<a class="lieninscription" href="inscription.php"><img src="../image/inscription.png">S'inscrire</a>
		</div>
		<div class="connexionconnex">
			<!-- input field connexion icone + input field -->
			<a class="lien-connex" href="moncompte.php"><img class="iconconnex" src="../image/connexion.png">Se connecter</a>
			<form>
				<input type="text" name="email" placeholder="email">
				<input type="password" name="mdp" placeholder="mot de passe">
				<input type="submit" value="Valider">
			</form>
		</div>
		<div class="menu-droite">
			<span class="iconeson">
				<audio  controls autoplay loop>
					<source src="../musique/Lhymne.mp3">
					<source src="../musique/Lesvoixbasques.mp3">
					<source src="../musique/Oleole.mp3">
				<img class="iconspeaker" src="../image/speaker.png" height="20px" width="20px" alt="icon haut parleur">
				</audio>
			</span>
			<span class="commande">
				<a href="Commande.php" class="iconcomm">
					Ma commande <img src="../image/shoppingcart.png" alt="icon d'un caddie">
				</a>
			</span>
		</div>
	</header>
	<div class="title">
		<a href="index.php">
			<h1>Truck 'O' Bueno</h1></a>
	</div>
	<nav>
		<div class="sidebar">
			<!-- liens vers autres pages -->
			<ul>
				<li> <a href="Evenements.php" class="lien">Evenements à venir</a> </li>
				<li> <a href="Menu.php" class="lien">Notre carte</a> </li>
				<li> <a href="Map.php" class="lien">Nous trouver</a> </li>
				<li> <a href="Collaborateurs.php" class="lien">Nos collaborateurs</a></li>
			</ul>
		</div>
	</nav>
	<section>
		<div class="minimap">
			<div id="minimap" style="width: 200px; height: 200px"><div>
			<script>
				function initMap() {
					var uluru = {
						lat: 48.048,
						lng: -1.742
					};
					var pos2 = {
						lat: 48.0477,
						lng: -1.741
					};
					var pos3 = {
						lat: 48.044,
						lng: -1.750
					};
					var pos4 = {
						lat: 48.045,
						lng: -1.743
					};
					var map = new google.maps.Map(document.getElementById('minimap'), {
						zoom: 14,
						center: uluru
					});
					var marker = new google.maps.Marker({
						position: uluru,
						map: map
					});
					var marker = new google.maps.Marker({
						position: pos2,
						map: map
					});
					var marker = new google.maps.Marker({
						position: pos3,
						map: map
					});
					var marker = new google.maps.Marker({
						position: pos4,
						map: map
					});
				}
			</script>
			<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxbvP2vNfL2nBrOWaRBAZNIB49DgofKc4&callback=initMap">
			</script>
		</div>
	</section>

	<div class="caroussel-container">
		<h2 class="caroussel-title">Nos produits</h2>
		<div id="myCarousel" class="carousel slide">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li class="item1 active"></li>
				<li class="item2"></li>
				<li class="item3"></li>
				<li class="item4"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">

				<div class="item active">
					<img src="../image/empanadas1.png" alt="Viande" width="700" height="500">
					<div class="carousel-caption">
						<h3>Viande</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
					</div>
				</div>

				<div class="item">
					<img src="../image/empanadas2.png" alt="Chania" width="700" height="500">
					<div class="carousel-caption">
						<h3>Poisson</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
					</div>
				</div>

				<div class="item">
					<img src="../image/empanadas3.png" alt="Flower" width="700" height="500">
					<div class="carousel-caption">
						<h3>Vegan</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
					</div>
				</div>

				<div class="item">
					<img src="../image/empanadas4.png" alt="Flower" width="700" height="500">
					<div class="carousel-caption">
						<h3>Fromage</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
					</div>
				</div>

			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#" role="button">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
			<a class="right carousel-control" href="#" role="button">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
		</div>
	</div>


	<div class="paragraph1">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
			dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>


	<script>
		$(document).ready(function() {
			// Activate Carousel
			$("#myCarousel").carousel();

			// Enable Carousel Indicators
			$(".item1").click(function() {
				$("#myCarousel").carousel(0);
			});
			$(".item2").click(function() {
				$("#myCarousel").carousel(1);
			});
			$(".item3").click(function() {
				$("#myCarousel").carousel(2);
			});
			$(".item4").click(function() {
				$("#myCarousel").carousel(3);
			});

			// Enable Carousel Controls
			$(".left").click(function() {
				$("#myCarousel").carousel("prev");
			});
			$(".right").click(function() {
				$("#myCarousel").carousel("next");
			});
		});
	</script>

</body>

</html>
