<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice3 Part6</title>
</head>
<body>
  <a href="index.php?week=12"><button type="button" class="btn btn-success ">Week</button></a>
  <p>
    <?php
    if (!empty($_GET['week'])) {
      echo $_GET['week'];
    }
    ?>
  </p>
</body>
</html>
