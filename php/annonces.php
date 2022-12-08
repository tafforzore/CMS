<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>annonces</title>
	<link rel="stylesheet" type="text/css" href="../css/accueil.css">
</head>
<body>
	<div class="container">
		<div class="container-title">
			<label>mairie de yaounde 5</label>
			<p><img src='cv.png'><h2>Profil</p></h2>
		</div>
		<div class="container-menu">
			<ul>
				<li><a href="accueil.php">accueil</a></li>
				<li><a href="personnel.php">personnel</a></li>
				<li><a href="projet.php">projet</a></li>
				<li><a href="#">annonce</a></li>
				<li><a href="espace_publicitaire.php">espace publicitaire</a></li>
			</ul>
		</div>
		<div class="img">
			<aside class='left'>
				<div class="article">
					<h2>Galerie</h2>
					<span>
						<a href="#"  id="id">
							<img src="../images.jpeg">
							<p>luc messi atangana</p>
						</a>
						<a href="#">GALERIE PHOTOS</a>
					</span>
				</div>
				<div class="article" id="space">
					<h2>Lien</h2>
					<span><a href="#">Gouvernace urbaine</a></span>
					<span><a href="#">Espace communautaire</a></span>
					<span><a href="#">Demarche administrative</a></span>
					<span><a href="#">Infrascruture et equipement</a></span>
			</aside>
			
	</div>
		<div class="contenu">
			<h1>Notification</h1>

			<?php 
				$mysqli = new mysqli('localhost','root','','wolowos');
				$mysqli -> set_charset('utf8');
				$requete = 'select * from annonce';
				$result = $mysqli -> query($requete);
				while($ligne = $result -> fetch_assoc()){
						echo '
							<div class="bloc">
								<div class = "containt-notification">
									<p><img style=" width: 100%; heigth: 50px;" src="../image/'.$ligne['images_notification'].'" width="100%" height="60px"><p>
									<p>'.$ligne['contenu_notification'].'</p>
									<p id="position"><button onclick="suprimer_notification()">Suprimer</button>
									<button onclick="Aller">visiter</button></p>
								</div>
							</div>
						';
				}
				$mysqli->close();
			?>
		</div>
	</div>
	<footer>
		<div class="search">
			<form method="POST" action="#">
				<input type="search" name="rechercher" onkeyup="ajaxing" placeholder="Lancer la recherche">
			<button name="envoyer">rechercher</button>
			</form>
		</div>
		
		<div class="menu-bar">
			<hr>
			<div class="item">
				<p>organisation</p>
				<span><a href="#">Institutions</a></span>
				<span><a href="#">santee</a></span>
				<span><a href="#">Entreprises</a></span>
				<span><a href="#">association</a></span>
				<span><a href="#">sport</a></span>
			</div>
			<div class="item">
				<p>driver</p>
				<span><a href="#">cameroun annee apres anne</a></span>
				<span><a href="#">evenement(festival,foire...)</a></span>
				<span><a href="#">dossier</a></span>
			</div>
			<div class="item">
				<p>monde</p>
				<span><a href="#">Organisation international</a></span>
				<span><a href="#">Ambassade du cameroun</a></span>
				<span><a href="#">Mission du cameroun a l'etranger</a></span>
				<span><a href="#">association</a></span>
				<span><a href="#">sport</a></span>
			</div>
		</div>
		<br>
		<br>
		<br>
		<div class="end">
			<hr>
			<span><a href="#">votre publiciter</a></span>
			<span><a href="#">nous contacter</a></span>
		</div>	
		<br>
		<br>
		<br>
		<div class="confidentialiter">
			<hr>
			<span><a href="#">Politique de Confidentialiter</a></span>|
			<span><a href="#">Politique de Cookies</a></span>
			<p>Groupe TP Tél : (+237) 651.88.14.64 & 693.16.17.78 Email : nzomutchawilfrid@gmail.cm</p>
		</div>
	</footer>
</body>
</html>