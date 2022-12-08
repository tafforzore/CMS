<?php
	include("start_bd.php");

	//reponse de insertion de projet projet_courrant
	if(isset($_POST["poster"])){
		$texte = $_POST["texte"];
		$img = $_FILES["image"]["tmp_name"];
		$titre = $_POST['titre'];

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
?>