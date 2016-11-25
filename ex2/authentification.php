<?php session_start();
$login=$_POST['login'];
$mdp=md5($_POST['mdp']);

//Connexion BDD :
$cle= new mysqli('localhost','root','root','utilisateurs');
$reponse=$cle->query("SELECT * FROM users WHERE login='$login' AND mdp='$mdp'");

if ($reponse->num_rows==1) {
  $_SESSION['log'] = $login;
  header("location:fichier.php");
} else {
  header("location:formulaire.php");
} ?>
