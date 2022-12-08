<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>accueil</title>
	<link rel="stylesheet" type="text/css" href="../css/accueil.css">
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
				<li><a href="#">projet</a></li>
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
		
			
	</div>
		<div class="contenu">
			<div class="blog">
				<h1>Projet et realisation</h1>
				<fieldset>
					<img src="../projet1.jpg">
					<h2>Le maire de la ville loge au carrefour Warda une compagnie pour étudiants et élèves</h2>
					<span>
						Première du genre dans la ville de Yaoundé, la Compagnie pour étudiants et élèves a été inaugurée le 2 mars dernier. Construit par la Communauté urbaine de Yaoundé (CUY), l’édifice a été rétrocédé à la Délégation générale à la Sûreté nationale. C’était au cours de la cérémonie au cours de laquelle prenait part Martin Mbarga Nguele, directeur général à la sûreté nationale, bénéficiaire du geste du maire Messi Atangana Luc.
						Construit en moins d’un an, le bâtiment abritant la compagnie pour étudiants et élèves est situé au carrefour Warda, au sein du Bois Saint-Anastasie. Bâti sur le modèle R+1, l’édifice compte six bureaux, quatre salles d’eau et des cellules.
						Son emplacement stratégique à ce carrefour de la ville tient de sa proximité avec les établissements scolaires et universitaires, mais aussi, de sa proximité avec le Palais polyvalent des sports et le quartier Briqueterie, des lieux souvent sujets à des actes d’insécurité.&nbsp 

						C’est donc tout heureux que le DGSN a reçu le bâtiment. « Vous ne pouvez pas imaginer l’importance de cette initiative spontanée et personnelle de votre part. Merci beaucoup, puissiez-vous persévérer dans ces initiatives qui répondent à nos besoins », a déclaré Martin Mbarga Nguele.&nbsp

						C’était en effet le cinquième bâtiment du genre que le maire rétrocède à la DGSN, depuis son arrivée à la tête de la ville en mars 2020. « Cet édifice que la mairie de la ville a construit fait partie des missions d’un maire. Le maire est chargé de l’amélioration des conditions de vie et du cadre de vie des populations. Parmi les éléments qui entrent dans les conditions de vie des populations, il y a la sûreté, la tranquillité et la sécurité. C’est dans cette optique que j’ai cru utile de devoir contribuer à l’amélioration des conditions de travail des agents de sécurité qui œuvrent à cette sécurité », a rappelé le maire.&nbsp
						Si cette fois il s’agissait d’une compagnie spécialisée, bien avant, le maire a rétrocédé quatre postes de Police de type R+1 à la DGSN. Chacun d’eux est situé au carrefour Bastos, à Olezoa, à Ekounou, à Coron et au quartier Tsinga.&nbsp&nbsp

					</span>
				</fieldset>
				<?php 
					$mysqli = new mysqli('localhost','root','','wolowos');
					$mysqli -> set_charset('utf8');
					$requete = 'select * from projet';
					$result = $mysqli -> query($requete);
					while($ligne = $result -> fetch_assoc()){
							echo '
								<fieldset style="width: 50%; heigth: 200px;">
									<img src="../image/'.$ligne['image_projet'].'">
									<h2>'.$ligne['titre'].'</h2>
									<span>'.$ligne['contenu_projet'].'
									</span>
								</fieldset>
							';
					}
					$mysqli->close();
				?>
			</div>
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