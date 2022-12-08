<?php
	session_start;
	//suprimer une pub
	if(isset($_POST["suprimer_pub"])){
		include 'start_bd.php';
		var_dump($_SESSION['user']['pub']);

		//connexion au serveur
		$serveur = "localhost";
		$user ="root";
		$mdp = "";
		$db = "wolowos";
		$exec = connexion($serveur,$user,$mdp,$db);

		$cmd = "delete from annonce where 'id_pub'=$_SESSION['user']['pub'] ";
		execute($exec, $cmd);
	}

 ?>