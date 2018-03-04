<?php
try {
	$bdd = new PDO('mysql: host=localhost; dbname=truckobueno; charset=utf8', 'root', '');
}
catch (PDOException $e) {
	die('Erreur : ' . $e->getMessage());
}
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (!empty($_POST)) {
	if ($_POST['mot_de_passe'] !== $_POST['confirme_mot_de_passe']) {
		echo "Les mots de passes doivent être identiques.";
	}
	else {
		$sql = "INSERT INTO user VALUES(null, '{$_POST['nom']}', '{$_POST['prenom']}', '{$_POST['date_de_naissance']}', '{$_POST['ville']}', '{$_POST['email']}', '{$_POST['mot_de_passe']}')";

		try {
			$bdd->exec($sql);
		} catch (PDOException $e) {
			die("Erreur dans la base de données : " . $e->getMessage());
		}

		echo "Inscription réussie.";
	}
}
?>


<!DOCTYPE html>
<html>

<head>
	<title>Truck O Bueno - Inscription</title>
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
								<div class="info">
									<form action="" method="post">
										<ul>
											<li>
												<p>Nom</p>
												<input type="text" name="nom" required>
											</li>
											<li>
												<p>Prenom</p>
												<input type="texte" name="prenom" required>
											</li>
											<li>
												<p>Date de naissance</p>
												<input type="date" name="date_de_naissance" required>
											</li>
											<li>
												<p>Ville</p>
												<input type="text" name="ville" required>
											</li>
											<li>
												<p>Email</p>
												<input type="text" name="email" required>
											</li>
											<li>
												<p>Mot de passe</p>
												<input type="password" name="mot_de_passe" required>
											</li>
											<li>
												<p>Confirmer le mot de passe</p>
												<input type="password" name="confirme_mot_de_passe" required>
											</li>
											<li>
												<br><input type="submit" value="Valider">
											</li>
										</ul>
									</form>
								</div>

        </section>
    </body>
</html>
