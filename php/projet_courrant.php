<html>
			<head>
				<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
				<title>wolowos</title>
			</head>
			<body>
		<div class="container"> 
			<?php
				$mysqli = new mysqli("localhost", "root", "", "wolowos");
				$mysqli -> set_charset("utf8");
				$requete = " SELECT projet, photos FROM current_projet";
				$a = 1;
				$resultat = $mysqli -> query($requete);
				while($ligne = $resultat->fetch_assoc()){
				   echo "
				   		
						<p>
							<div class='container-project' >
								<div class= 'img' ><img src= ".$ligne["photos"]."></img></div>
								<span class='text'>".$ligne["projet"]."</span>
							</div>
						</p> 
						";
					$a=a+1;
				}
				$mysqli ->close();
			?>
		</div> 
	</body>
</html>