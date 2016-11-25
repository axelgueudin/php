<?php session_start(); ?>

<form method="POST" action="authentification.php">
  <label for="login">LOGIN</label>
  <input type="text" id="login" name="login" value="">
  <label for="mdp">MDP</label>
  <input type="text" id="mdp" name="mdp" value="">

  <input type="submit" id="bouton" name="bouton" value="Connexion">
</form>
