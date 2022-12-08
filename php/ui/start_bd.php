 

	<?php
		//gestion de connexion
		function connexion($serveur,$user,$pass,$database){
				echo 'string';
			$connect = mysqli_connect($serveur,$user,$pass,$database);
			if(!$connect){
				die("echec de la connexion a la bd !!".mysqli_connect_error());
			}else{
				return $connect;
			}
		}

		function execute($connexion, $requette){
			$result = mysqli_query($connexion, $requette);
			if($result){
				echo "<p style='color: white; background-color: blue; padding: 15px;'>l'element a ete poster avec succes</p>";
				return $result;
			}else{
				echo "erreur de postage :".mysqli_query_error($result)." veuiller appeler un expert pour le probleme";
				exit();
			}
		}

		function renommer_img($img, $newf){
			if(file_exists($img)){
	            if(is_file($img)){
	                $newf = $_FILES["image"]["name"];
	                rename($img, $newf);
	                return $newf;
	            }
			}
		}
	

		function deplacer_img($newf){
			$src = 'C:/xampp/htdocs/cms/1.4/site/wolowos/image';
			copy($newf, 'C:/xampp/htdocs/cms/1.4/site/wolowos/image/'.$newf);
		}
	?>
	