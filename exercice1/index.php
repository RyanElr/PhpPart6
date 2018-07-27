
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice1 Part6</title>
</head>
<body>
  <a href="index.php?nom=Nemare&amp;prenom=Jean"><button type="button" class="btn btn-success ">Jean Nemare</button></a>
  <p>
    <?php
    if (!isset($_GET['nom']) AND isset ($_GET['prenom'])) {
      echo 'Bonjour ' .$_GET['nom'] .' '. $_GET['prenom'];
    }
    ?>
  </p>
</body>
</html>
