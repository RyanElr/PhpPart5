<!-- Déclaration des variables mois -->
<?php
$departement[02]='Aisne';
$departement[59]='Nord';
$departement[60]='Oise';
$departement[62]='Pas-de-Calais';
$departement[80]='Somme';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Exercice10 Part5</title>
</head>
<body>
  <!-- La valeur $cle = la valeur entre crochets -->
  <!-- La valeur $bloc = la valeur entre côtes -->
  <?php
  foreach ($departement as $cle => $bloc){
             echo 'Le departement : '.$bloc.' est le numéro : '. $cle . '.<br/>';
         }
  ?>
</body>
</html>
