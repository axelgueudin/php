<form method="POST" action="traitement.php">
  <label for="nom">NOM</label>
  <input type="text" id="nom" name="nom" value=" ">
  <label for="prenom">PRENOM</label>
  <input type="text" id="prenom" name="prenom" value=" ">
  <label for="male">HOMME</label>
  <input type="radio" id="Homme" name="sexe" value="Homme " checked="checked" >
  <label for="female">FEMME</label>
  <input type="radio" id="Femme" name="sexe" value="Femme ">
  <label for="cb">MAJEUR</label>
  <input type="checkbox" id="cb" name="cb" value="Majeur ">
  <br/>
  <u>Loisirs</U> :
  <br/>
  <label for="cinema">Cinema</label>
  <input type="checkbox" value="Cinema" name="loisirs[]">
  <label for="manger">Manger</label>
  <input type="checkbox" value="Manger" name="loisirs[]">
  <label for="sport">Sport</label>
  <input type="checkbox" value="Sport" name="loisirs[]">
  <label for="sieste">Sieste</label>
  <input type="checkbox" value="Sieste" name="loisirs[]">
<select name="annee">
  <?php
  for( $annee=1900 ; $annee < 2017 ; $annee++)
  {
    echo "<option value=\"$annee\">$annee</option>" ;
  }
  ?>
</select>
  <input type="submit" id="bouton" name="bouton" value="OK!">
</form>
