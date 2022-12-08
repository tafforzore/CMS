<?php

	if(isset($_POST["poster_pub"])){
		$texte = $_POST["texte"];
		$img = $_FILES["image"]["tmp_name"];

		if ($_FILES["image"]["error"] > 0)
		  {
		  echo "Error: " . $_FILES["image"]["error"] . "<br />";
		  }
		else
		  {
		  echo "Upload: " . $_FILES["image"]["name"] . "<br />";
		  echo "Type: " . $_FILES["image"]["type"] . "<br />";
		  echo "Size: " . ($_FILES["image"]["size"] / 1024) . " Kb<br />";
		  echo "Stored in: " . $_FILES["image"]["tmp_name"];
		}


		if(file_exists($img)){
            if(is_file($img)){
                $newf = $_FILES["image"]["name"];
                rename($img, $newf);
                echo 'Le fichier ' .$img. ' a été renommé en ' .$newf;
            }
	} 


	echo $img;
	$src = 'C:/xampp/htdocs/cms/1.4/site/wolowos/image';
	copy($newf, 'C:/xampp/htdocs/cms/1.4/site/wolowos/image/'.$newf);
}

?>