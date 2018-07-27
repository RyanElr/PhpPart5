<!-- déclaration de la variable months avec dedans les valeurs des mois -->
<?php
$month= array('','Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai','Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice8 Part5</title>
</head>
<body>
  <p>
    <!-- Boucle pour afficher les mois -->
    <?php
    foreach ($month as $value) {
             echo $value . '<br/>';
         }
    ?>
  </p>
</body>
</html>
