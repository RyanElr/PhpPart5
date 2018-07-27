<!-- Création de la variable des mois -->
<?php
$month= array('','Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai','Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice1 Part5</title>
</head>
<body>
  <p>
    <!-- Sélection du mois-->
    <?php
    echo $month[1];
    ?>
  </p>
</body>
</html>
