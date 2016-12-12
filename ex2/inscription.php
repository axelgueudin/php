<?php session_start();
if (isset($_GET['error'])){
  echo "Ce login existe deja";
}
?>
<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
<form method="POST" action="envoi.php">
  <label for="login">LOGIN</label>
  <input type="text" id="login" name="login" value="">
  <label for="mdp">MDP</label>
  <input type="password" id="mdp" name="mdp" value="">

  <input type="submit" id="bouton" name="bouton" value="Creation">
</form>
  </body>
</html>
