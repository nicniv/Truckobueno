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
				<img class="iconspeaker" src="../image/speaker.png" height="20px" width="20px">
			</span>
			<span class="commande">
				<span>Ma commande</span>
			<a href="Commande.php" class="iconcomm">
					<img src="../image/shoppingcart.png">
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
                        var uluru = {lat: 48.048, lng: -1.742 };
                        var pos2 = {lat: 48.0477, lng: -1.741};
                        var pos3 ={ lat: 48.044, lng: -1.750};
                        var pos4 ={lat: 48.045, lng: -1.743};
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
                <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxbvP2vNfL2nBrOWaRBAZNIB49DgofKc4&callback=initMap">
                </script></div>
            <h3>Commande précédente</h3>
            <div class="ancien_co">
                <img src="../image/empanadas1.png" alt="image empanadas">
                <img src="../image/empanadas2.png" alt="image empanadas">
                <img src="../image/empanadas3.png" alt="image empanadas">
                <p>04/05/06</p>
                <div class="prix_compte"><p>15€</p></div>

            </div>
            <div class="ancien_co">
                <img src="../image/empanadas5.png" alt="image empanadas">
                <img src="../image/empanadas4.png" alt="image empanadas">
                <img src="../image/empanadas2.png" alt="image empanadas"></div>
            <p>01/02/03</p>
            <div class="prix_compte"><p>15.50€</p></div>
            <form>
                <input type="radio" class="bouton_news">
                <p>Recevoir la newsletter</p>
            </form>
            <p>Changer mon mot de passe</p>
            <form><input type="text" name="nvmdp" placeholder="Nouveau mot de passe"> </form>
            <p>Confirmer nouveau mot de passe</p>
            <form><input type="text" name="nvmdp" placeholder="Nouveau mot de passe"> </form>
        </section>
    </body>
</html>
