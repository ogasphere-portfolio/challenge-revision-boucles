<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Color generator</title>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div id="root">
      <h2>Nuances de gris</h2>
      <div class="boxes">
        <?php
        // TODO
       
        // On crée un tableau vide qui viendra accueillir nos valeurs.
        $arrayHexas = [];
        for ($index=0; $index < 16; $index++) { 
          // On convertindext le compteur $index en hexadécindexmal et on l'ajoute dans une nouvelle entrée du tableau.  
          $arrayHexas[] = dechex($index);
        }
        
        foreach($arrayHexas as $arrayHexa){
          $colorHex = '#'. $arrayHexa . $arrayHexa . $arrayHexa;
          echo '<div class="box" style="background-color:'.$colorHex .'"></div>';
        }
        unset($arrayHexa);
        
     


        ?>
      </div>
      <h2>Toutes les couleurs</h2>
      <div class="boxes">
        <?php
        // TODO
        foreach ($arrayHexas as $red) {
          foreach ($arrayHexas as $green) {
            foreach ($arrayHexas as $blue) {
              $colorHex = '#'. $red . $green . $blue;
              echo '<div class="box" style="background-color:'.$colorHex .'"></div>';

            }
          }
        }
        ?>
      </div>
     
    </div>
	</body>
</html>
