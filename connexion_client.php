<?php
session_start(); //se connecte a la session

include 'header.php';

if (isset($_POST['uname']) && (isset($_POST['psw'])))
{
  $user = $_POST['uname'];
  $password = $_POST['psw'];
}
$_SESSION['username'] = $user;

echo "Bienvenu " . $_SESSION['username'] . ".<br> Votre mot de passe est : " .$password;
echo "<br> Vous etes maintenant connecter";



echo "<br><br><br><br>";
//creer une fonction avec des arguments
function vignoble($bouteille, $provenance)
{
  return "Vous pouvez aussi  acheter du " .$bouteille . " qui vient " . $provenance . ". <br>";
}
echo "Ceci est la function <br>";
echo vignoble("vin rouge", "d'Amerique");





?>
