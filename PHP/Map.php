<!DOCTYPE html>
<html>

<head>
	<title>Truck O Bueno - Accueil</title>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
	<link href="../CSS/style.css" rel="stylesheet">
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
			<a class="lieninscription" href="inscription.html"><img src="../image/inscription.png">S'inscrire</a>
		</div>
		<div class="connexionconnex">
			<!-- input field connexion icone + input field -->
			<a class="lien-connex" href="moncompte.html"><img class="iconconnex" src="../image/connexion.png">Se connecter</a>
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
				<span>Ma commande</span>
			<a href="Commande.html" class="iconcomm">
					<img src="../image/shoppingcart.png" alt="icon d'un caddie">
				</a>
			</span>
		</div>
	</header>
	<div class="title">
		<a href="index.html">
			<h1>Truck 'O' Bueno</h1></a>
	</div>
	<nav>
		<div class="sidebar">
			<!-- liens vers autres pages -->
			<ul>
				<li> <a href="Evenements.html" class="lien">Evenements à venir</a> </li>
				<li> <a href="Menu.html" class="lien">Notre carte</a> </li>
				<li> <a href="Map.html" class="lien">Nous trouver</a> </li>
				<li> <a href="Collaborateurs.html" class="lien">Nos collaborateurs</a></li>
			</ul>
		</div>
	</nav>
	<section>
		<div class="grandemap">
			<div id="map" style="width: 1000px; height: 800px">
			</div>
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
					var map = new google.maps.Map(document.getElementById('map'), {
						zoom: 15,
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
			<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhM7nor4_Py1uYMa6NDzydwnekR2GHSf0&callback=initMap">
			</script>

		</div>

	</section>
</body>

</html>