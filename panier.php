<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
  session_start(); //se connecte a la session

  include 'header.php';

  //var_dump($_POST);

  if (isset($_POST['produit']) && (isset($_POST['prix'])))
  {
    $nom = $_POST['produit'];
    $prix = $_POST['prix'];

    $_SESSION['produit'] = $nom;
    $_SESSION['prix'] = $prix;
  }
  echo "Le nom du vin est : " .$_SESSION['produit'];
  echo "<br>";
  echo "Le prix est : " .$_SESSION['prix'];
?>

<form action="achat.php" method="post">
  <input type="submit" name="" value="Acheter">
</form>

</body>
</html>
