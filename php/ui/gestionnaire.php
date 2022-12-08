
<?php
	include("start_bd.php");

	//reponse de insertion de projet projet_courrant
	if(isset($_POST["poster"])){
		$texte = $_POST["texte"];
		if(isset($_FILES)){
			var_dump($_FILES);
		}
	}
?>
		