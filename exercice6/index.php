<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice3 Part6</title>
</head>
<body>
  <a href="index.php?building=12&amp;room=101"><button type="button" class="btn btn-success ">Home</button></a>
  <p>
    <?php
    if (!empty($_GET['building']) && !empty($_GET['room'])) {
      echo 'Bienvenue dans le building' . ' ' .  $_GET['building'] . ' ' . 'Chambre' . ' ' . $_GET['room'];
    }
    ?>
  </p>
</body>
</html>
