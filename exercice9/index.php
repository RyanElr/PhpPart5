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
  <title>Exercice9 Part5</title>
</head>
<body>
  <?php
  foreach ($departement as $value) {
           echo $value . '<br/>';
       }
  ?>
</body>
</html>
