<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice2 Part6</title>
</head>
<body>
  <a href="index.php?nom=Nemare&amp;prenom=Jean"><button type="button" class="btn btn-success ">Jean Nemare</button></a>
  <p>
    <?php
    if (!empty($_GET['nom']) AND !empty($_GET['prenom'])) {
      echo 'Bonjour ' .$_GET['nom'] .' '. $_GET['prenom'];
    }
    else {
       echo'Il faut renseigner l\'âge';
    }
    ?>
  </p>
</body>
</html>
