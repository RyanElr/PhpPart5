<!-- Création des variables département (ajout de Champagne-Ardenne) -->
<?php
$departement[02]='Aisne';
$departement[59]='Nord';
$departement[60]='Oise';
$departement[62]='Pas-de-Calais';
$departement[80]='Somme';
$departement[51]='Champagne-Ardenne';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Exercice7 Part5</title>
</head>
<body>
  <!--Sélection du département -->
  <?php
  echo $departement[51];
  ?>
</body>
</html>
