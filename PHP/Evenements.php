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
			<a class="lieninscription" href="inscription.html"><img src="../image/inscription.png">S'inscrire</a>
		</div>
		<div class="connexionconnex">
			<!-- input field connexion icone + input field -->
			<a class="lien-connex" href="moncompte.html"><img class="iconconnex" src="../image/connexion.png">Se connecter</a>
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
				<span>Ma commande</span>
			<a href="Commande.php" class="iconcomm">
					<img src="../image/shoppingcart.png" alt="icon d'un caddie">
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
			<div id="minimap" style="width:200px;height:200px">
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
		<div class="hellfest">
			<a href="http://www.hellfest.fr/"><img src="/image/hellfest.jpg" alt="image de la foule helfest"></a>
			<p>Le Hellfest, également appelé Hellfest Summer Open Air, est un festival de musique français spécialisé dans les musiques extrêmes, annuellement organisé au mois de juin à Clisson en Loire-Atlantique. Sa forte fréquentation le fait figurer parmi les
				plus importants festivals de musique français. Il est aussi l'un des plus grands festivals de metal en Europe et le premier en France.</p>
		</div>
		<div class="lestrans">
			<a href="https://www.lestrans.com/"><img src="/image/vc.jpg" alt="affiche trans musicales"></a>
			<p>Les Rencontres trans musicales de Rennes sont un festival international de musiques actuelles qui se tient tous les ans début décembre à Rennes et qui s'étire sur 3 à 5 jours suivant les années. En 2012, le festival a rassemblé plus de 60 000 personnes
				et a comptabilisé environ 32 000 entrées payantes1.</p>
		</div>
		<div class="viellec">
			<a href="http://www.vieillescharrues.asso.fr/2018/"><img src="/image/vclogo.png" alt="logo vielle charrues"></a>
			<p>Le festival des Vieilles Charrues (Gouel an Erer Kozh en breton) est un festival de musique accueillant des artistes de divers horizons. Ce festival annuel dure quatre jours et débute à la mi-juillet dans la commune de Carhaix-Plouguer, dans le Centre
				Finistère, en Bretagne. Il a été créé en 1992 dans la commune voisine de Landeleau et a pour but de mélanger les genres et être accessible à tout public. Il est rapidement devenu le plus grand festival de musique français pour ce qui est de la fréquentation1,
				entraînant un public attiré par l'affiche éclectique et l'esprit festif et convivial. Le record de fréquentation date de 2017, avec 280 000 festivaliers sur quatre jours, dont 222 000 entrées payantes et 6 800 bénévoles.</p>
		</div>
	</section>


</body>

</html>
