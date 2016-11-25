<?php session_start();
if (!isset($_SESSION['log'])){
  header("location:formulaire.php");
} else {
  echo "Vous êtes connecté grâce au login : ".$_SESSION['log']."</br>";
}

?>
<a href="deco.php">Déconnexion</a>
