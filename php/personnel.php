<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Personnel</title>
	<link rel="stylesheet" type="text/css" href="../css/accueil.css">
	<link rel="stylesheet" type="text/css" href="../css/personnel.css">
</head>
<body>
	<div class="container">
		<div class="container-title">
			<label>mairie de yaounde 5</label>
			<p><img src='cv.png'><h2>Projet</p></h2>
		</div>
		<div class="container-menu">
			<ul>
				<li><a href="accueil.php">accueil</a></li>
				<li><a href="#">personnel</a></li>
				<li><a href="projet.php">projet</a></li>
				<li><a href="annonces.php">annonce</a></li>
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
		
			<aside class="rigth">
				<div class="article">
					<p><h2>Article</h2>
					<span>Mouvement patriotique</span>
					<span><a href="#"><img src="#" alt="mon image">contenu de l'article stocke dans la bd</a></span>
					<span><a href="#"><img src="#" alt="mon image">contenu de l'article stocke dans la bd</a></span>
					<span><a href="#"><img src="#" alt="mon image">contenu de l'article stocke dans la bd</a></span>
					<span><a href="#"><img src="#" alt="mon image">contenu de l'article stocke dans la bd</a></span></p>
				</div>
				<div class="article">
					<h2>Documentation</h2>
					<span><a href="#">ici sont stockes les doc</a></span>
					<span><a href="#">ici sont stockes les doc</a></span>
					<span><a href="#">ici sont stockes les doc</a></span>
					<span><a href="#">ici sont stockes les doc</a></span>
					</p>
				</div>
			</div>
		</aside>
		</div>


		<!--contenu du personnel-->
		<div class="contenu">
			<h2>Mairie de yaounde 5</h2>
				<h3>Personnel de la mairie</h3>
			<?php  

				$mysqli = new mysqli('localhost','root','','wolowos');
					$mysqli -> set_charset('utf8');
					$requete = 'select * from personnel';
					$result = $mysqli -> query($requete);
					while($ligne = $result -> fetch_assoc()){
							echo '
							<div class="bloc">
								<div class="contain-bloc">
									<p><img src="../images.jpeg" alt="PHOTOS"></p>
									<p>
										<span> service etats civil</span><br><br>
										<span>Lun:&nbsp  &nbsp  &nbsp07:30-15:30</span><br>
										<span>Mar:&nbsp  &nbsp  &nbsp07:30-15:30</span><br>
										<span>Mer:&nbsp  &nbsp  &nbsp07:30-15:30</span><br>
										<span>Jeu:&nbsp  &nbsp  &nbsp07:30-15:30</span><br>
										<span>Ven:&nbsp  &nbsp  &nbsp07:30-15:30</span><br>

									</p>
								</div>
								<div class="contain-bloc">
									<p><img src="../image/'.$ligne['photos'].'" alt="PHOTOS"></p>
									<p>
										<span>'.$ligne['nom_responsable'].'</span> <br><br>
										<span>'.$ligne['poste'].'</span><br>
										<span>Tel :&nbsp  &nbsp  &nbsp'.$ligne['numeros'].'</span><br>
									</p>
								</div>
							</div>	
							';
					}
					$mysqli->close();

			?>		
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