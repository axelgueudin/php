<?php session_start();
$login=$_POST['login'];
$mdp=md5($_POST['mdp']);

//Connexion BDD :
$bdd= new mysqli('localhost','root','root','utilisateurs');
$reponse=$bdd->query("SELECT * FROM users WHERE login='$login' AND mdp='$mdp'");

if ($reponse->num_rows==1) {
  header("location:inscription.php?error");
}
else
{
  $sql=$bdd->query("INSERT INTO users(login,mdp) VALUES ('$login','$mdp')");
  header("location:formulaire.php");
}


?>
