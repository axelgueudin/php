<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
  echo "Bonjour ".$_POST['nom']." ".$_POST['prenom']."<br />";
  echo "Vous êtes : ".$_POST['sexe']."<br />";
  if (isset($_POST['cb'])){
    echo "Vous êtes majeur ! <br />";
  }
  foreach ($_POST['loisirs'] as $loisirs) {
    echo "Votre loisir préféré : ".$loisirs."<br />" ;
  }
  echo "Votre année de naissance est : ".$_POST['annee'];
?>
</body>
</html>
