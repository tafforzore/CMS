<?php
	include("start_bd.php");

	//reponse de insertion de projet projet_courrant
	if(isset($_POST["poster_projet"])){
		$texte = $_POST["texte"];
		$img = $_FILES["image"]["tmp_name"];
		$titre = $_POST['titre'];
		$newf = $_FILES["image"]["name"];

		//renommer et deplacer
		$img = renommer_img($img, $newf);
		deplacer_img($newf);

		//connexion au serveur
		$serveur = "localhost";
		$user ="root";
		$mdp = "";
		$db = "wolowos";
		$exec = connexion($serveur,$user,$mdp,$db);

		//insertion
		$cmd = "insert into projet(image_projet, titre, contenu_projet) values ('$img','$titre','$texte')";
		execute($exec, $cmd);
	}

	if(isset($_POST["poster_annonces"])){
		$texte = $_POST["texte"];
		$img = $_FILES["image"]["tmp_name"];
		$newf = $_FILES["image"]["name"];

		//renommer et deplacer
		$img = renommer_img($img, $newf);
		deplacer_img($newf);

		//connexion au serveur
		$serveur = "localhost";
		$user ="root";
		$mdp = "";
		$db = "wolowos";
		$exec = connexion($serveur,$user,$mdp,$db);

		//insertion
		$cmd = "insert into annonce(images_notification,	contenu_notification) values ('$img','$texte')";
		execute($exec, $cmd);
	}

	if(isset($_POST["poster_personnel"])){
		$poste = $_POST["poste"];
		$nom = $_POST["nom"];
		$numeros = $_POST["numeros"];
		$img = $_FILES["image"]["tmp_name"];
		$newf = $_FILES["image"]["name"];

		//renommer et deplacer
		$img = renommer_img($img, $newf);
		deplacer_img($newf);

		//connexion au serveur
		$serveur = "localhost";
		$user ="root";
		$mdp = "";
		$db = "wolowos";
		$exec = connexion($serveur,$user,$mdp,$db);

		//insertion
		$cmd = "insert into personnel(nom_responsable, poste, numeros, photos) values ('$nom','$poste','$numeros','$img')";
		execute($exec, $cmd);
	}
	//
	//
	//poster un poste
	//
	//
	if(isset($_POST["poster_postes"])){
		$texte = $_POST["texte"];

		//connexion au serveur
		$serveur = "localhost";
		$user ="root";
		$mdp = "";
		$db = "wolowos";
		$exec = connexion($serveur,$user,$mdp,$db);

		//insertion
		$cmd = "insert into poste(nom_poste) values ('$texte')";
		execute($exec, $cmd);
	}
	//
	//ajouter une publiciter
	//
	//
	if(isset($_POST["poster_pub"])){
		$texte = $_POST["texte"];
		$img = $_FILES["image"]["tmp_name"];
		$newf = $_FILES["image"]["name"];

		//renommer et deplacer
		$img = renommer_img($img, $newf);
		deplacer_img($newf);

		//connexion au serveur
		$serveur = "localhost";
		$user ="root";
		$mdp = "";
		$db = "wolowos";
		$exec = connexion($serveur,$user,$mdp,$db);

		//insertion
		$cmd = "insert into publicite(images_pub,contenu_pub) values ('$img','$texte')";
		execute($exec, $cmd);
	}
?>
		

		<html>
		<head>
			<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
			<title>wolowos</title>
		</head>
		<body>
				<div class="container">
					<fieldset class="field1">
						<form action="gestion_projet_courrant.php" method="POST" enctype="multipart/form-data">
							<legend>ajouter un projet courrant</legend><br>
							<label><input type="text" name="titre" placeholder="entrer le titre"></label><br>
							<textarea placeholder="veuillez saisir le contenu de projet" name="texte"></textarea><br>
							<label>Entrez le contenu(image) :<input type="file" name="image"></label>
							<input type="submit" value="POSTER" name ="poster_projet">
						</form>
					</fieldset>
					<br>
					<fieldset class="field1">
						<form action="gestion_projet_courrant.php" method="POST" enctype="multipart/form-data">
							<legend>ajouter une annonces</legend><br>
							<textarea placeholder="veuillez saisir le contenu de projet" name="texte"></textarea><br>
							<label>Entrez le contenu(image) :<input type="file" name="image"></label>
							<input type="submit" value="POSTER" name ="poster_annonces">
						</form>
					</fieldset>
					<br>
					<fieldset class="field1">
						<form action="gestion_projet_courrant.php" method="POST" enctype="multipart/form-data">
							<legend>ajouter un poste</legend><br>
							<textarea placeholder="veuillez saisir le poste a ajouter" name="texte"></textarea><br>
							<input type="submit" value="POSTER" name ="poster_postes">
						</form>
					</fieldset>
					<br>
					<fieldset class="field1">
						<form action="gestion_projet_courrant.php" method="POST" enctype="multipart/form-data">
							<legend>ajouter une publiciter</legend><br>
							<textarea placeholder="veuillez inserer le contenu de la publiciter" name="texte"></textarea><br>
							<label>Entrez le contenu(image) :<input type="file" name="image"></label><br>
							<input type="submit" value="POSTER" name ="poster_pub">
						</form>
					</fieldset>
					<br>
					<fieldset class="field1">
						<form action="gestion_projet_courrant.php" method="POST" enctype="multipart/form-data">
							<legend>ajouter une personnel</legend><br>
							<label><input type="text" name="nom" placeholder="veuillez saisir le nom du personnel"></label><br>
							<label><input type="text" name="numeros" placeholder="veuillez saisir son numeros"></label><br>
							<label>veuillez selectionner sont poste : 
								<?php
									$mysqli = new mysqli('localhost','root','','wolowos');
									$mysqli -> set_charset('utf8');
									$requete = 'select nom_poste from poste';
									$result = $mysqli -> query($requete);
									echo '<select name="poste">';
									while($ligne = $result -> fetch_assoc()){
											echo ' <option>'.$ligne['nom_poste'].'</option>';
									}
									echo '</select>';
									$mysqli->close();
								 ?>
							</label><br>
							<label>Entrez le contenu(image) :<input type="file" name="image"></label>
							<input type="submit" value="POSTER" name ="poster_personnel">
						</form>
					</fieldset>
				</div>
			</body>
		<html>